<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminIndustryController extends Controller
{
    public function index(Request $request)
    {
        Industry::ensureTableExists();

        $query = Industry::orderBy('sort_order', 'asc');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('tagline', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%");
            });
        }

        $industries = $query->paginate(12)->withQueryString();

        return view('admin.industries.index', compact('industries'));
    }

    public function create()
    {
        return view('admin.industries.create');
    }

    public function store(Request $request)
    {
        Industry::ensureTableExists();

        $request->validate([
            'title'        => 'required|string|max:255',
            'slug'         => 'nullable|string|max:255',
            'tagline'      => 'nullable|string|max:500',
            'short_desc'   => 'nullable|string',
            'image_file'   => 'nullable|image|mimes:jpeg,jpg,png,webp|max:4096',
            'image_url'    => 'nullable|string|max:1000',
            'highlights'   => 'nullable|string',
            'why_nexteck'  => 'nullable|string',
            'seo_title'    => 'nullable|string|max:255',
            'meta_desc'    => 'nullable|string',
            'keywords'     => 'nullable|string',
            'sort_order'   => 'nullable|integer',
            'is_active'    => 'nullable|boolean',
        ]);

        $baseSlug = $request->filled('slug') ? Str::slug($request->slug) : Str::slug($request->title);
        $slug = $baseSlug;
        $counter = 1;
        while (Industry::where('slug', $slug)->exists()) {
            $slug = "{$baseSlug}-" . (++$counter);
        }

        // Handle image (uploaded file takes priority, otherwise image_url)
        $imagePath = $request->image_url ?: null;
        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $filename = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
            $destination = public_path('uploads/industries');
            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }
            $file->move($destination, $filename);
            $imagePath = 'uploads/industries/' . $filename;
        }

        // Parse highlights array from newline-separated string
        $highlightsArray = [];
        if ($request->filled('highlights')) {
            $lines = explode("\n", str_replace("\r", "", $request->highlights));
            $highlightsArray = array_values(array_filter(array_map('trim', $lines)));
        }

        // Parse keywords array from comma or newline-separated string
        $keywordsArray = [];
        if ($request->filled('keywords')) {
            $rawKw = str_replace(["\r", "\n"], ',', $request->keywords);
            $kwItems = explode(',', $rawKw);
            $keywordsArray = array_values(array_filter(array_map('trim', $kwItems)));
        }

        Industry::create([
            'title'       => $request->title,
            'slug'        => $slug,
            'tagline'     => $request->tagline,
            'short_desc'  => $request->short_desc,
            'image'       => $imagePath,
            'highlights'  => $highlightsArray,
            'why_nexteck' => $request->why_nexteck,
            'seo_title'   => $request->seo_title ?: ($request->title . ' Sourcing & Technology | Nexteck'),
            'meta_desc'   => $request->meta_desc ?: ($request->tagline ?: Str::limit($request->short_desc, 150)),
            'keywords'    => $keywordsArray,
            'sort_order'  => $request->filled('sort_order') ? (int)$request->sort_order : 1,
            'is_active'   => $request->has('is_active') ? (bool)$request->is_active : true,
        ]);

        return redirect()->route('admin.industries.index')->with('success', 'Industry created successfully!');
    }

    public function edit($id)
    {
        $industry = Industry::findOrFail($id);
        return view('admin.industries.edit', compact('industry'));
    }

    public function update(Request $request, $id)
    {
        $industry = Industry::findOrFail($id);

        $request->validate([
            'title'        => 'required|string|max:255',
            'slug'         => 'nullable|string|max:255',
            'tagline'      => 'nullable|string|max:500',
            'short_desc'   => 'nullable|string',
            'image_file'   => 'nullable|image|mimes:jpeg,jpg,png,webp|max:4096',
            'image_url'    => 'nullable|string|max:1000',
            'highlights'   => 'nullable|string',
            'why_nexteck'  => 'nullable|string',
            'seo_title'    => 'nullable|string|max:255',
            'meta_desc'    => 'nullable|string',
            'keywords'     => 'nullable|string',
            'sort_order'   => 'nullable|integer',
            'is_active'    => 'nullable|boolean',
        ]);

        // Slug handling
        $targetSlug = $request->filled('slug') ? Str::slug($request->slug) : Str::slug($request->title);
        if ($targetSlug !== $industry->slug) {
            $slug = $targetSlug;
            $counter = 1;
            while (Industry::where('slug', $slug)->where('id', '!=', $industry->id)->exists()) {
                $slug = "{$targetSlug}-" . (++$counter);
            }
            $industry->slug = $slug;
        }

        // Image handling
        if ($request->hasFile('image_file')) {
            if ($industry->image && !Str::startsWith($industry->image, ['http://', 'https://']) && File::exists(public_path($industry->image))) {
                File::delete(public_path($industry->image));
            }

            $file = $request->file('image_file');
            $filename = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
            $destination = public_path('uploads/industries');
            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }
            $file->move($destination, $filename);
            $industry->image = 'uploads/industries/' . $filename;
        } elseif ($request->filled('image_url')) {
            $industry->image = $request->image_url;
        }

        // Parse highlights
        $highlightsArray = [];
        if ($request->filled('highlights')) {
            $lines = explode("\n", str_replace("\r", "", $request->highlights));
            $highlightsArray = array_values(array_filter(array_map('trim', $lines)));
        }

        // Parse keywords
        $keywordsArray = [];
        if ($request->filled('keywords')) {
            $rawKw = str_replace(["\r", "\n"], ',', $request->keywords);
            $kwItems = explode(',', $rawKw);
            $keywordsArray = array_values(array_filter(array_map('trim', $kwItems)));
        }

        $industry->title       = $request->title;
        $industry->tagline     = $request->tagline;
        $industry->short_desc  = $request->short_desc;
        $industry->highlights  = $highlightsArray;
        $industry->why_nexteck = $request->why_nexteck;
        $industry->seo_title   = $request->seo_title ?: ($request->title . ' Sourcing & Technology | Nexteck');
        $industry->meta_desc   = $request->meta_desc ?: ($request->tagline ?: Str::limit($request->short_desc, 150));
        $industry->keywords    = $keywordsArray;
        $industry->sort_order  = $request->filled('sort_order') ? (int)$request->sort_order : 1;
        $industry->is_active   = $request->has('is_active') ? (bool)$request->is_active : false;
        $industry->save();

        return redirect()->route('admin.industries.index')->with('success', 'Industry updated successfully!');
    }

    public function destroy($id)
    {
        $industry = Industry::findOrFail($id);
        if ($industry->image && !Str::startsWith($industry->image, ['http://', 'https://']) && File::exists(public_path($industry->image))) {
            File::delete(public_path($industry->image));
        }
        $industry->delete();

        return redirect()->route('admin.industries.index')->with('success', 'Industry deleted successfully!');
    }
}
