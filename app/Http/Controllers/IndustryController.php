<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Backward-compatible static helper.
     */
    public static function getIndustries(): array
    {
        return Industry::getDefaultCatalog();
    }

    /**
     * Display the listing page of all industries with 6 per page pagination.
     */
    public function index()
    {
        try {
            Industry::ensureTableExists();
            $industries = Industry::where('is_active', true)
                ->orderBy('sort_order', 'asc')
                ->paginate(6);
        } catch (\Throwable $e) {
            // Graceful fallback to static array if database cannot be reached
            $items = collect(self::getIndustries())->map(function ($item) {
                return (object) [
                    'title'      => $item['title'],
                    'slug'       => $item['slug'],
                    'tagline'    => $item['tagline'],
                    'image'      => $item['image'],
                    'image_url'  => asset($item['image']),
                    'short_desc' => $item['short_desc'],
                    'highlights' => $item['highlights'] ?? [],
                    'keywords'   => $item['keywords'] ?? [],
                ];
            });

            $page = request()->get('page', 1);
            $perPage = 6;
            $paginatedItems = $items->slice(($page - 1) * $perPage, $perPage)->all();
            $industries = new \Illuminate\Pagination\LengthAwarePaginator(
                $paginatedItems,
                $items->count(),
                $perPage,
                $page,
                ['path' => request()->url(), 'query' => request()->query()]
            );
        }

        return view('industries.index', compact('industries'));
    }

    /**
     * Display a single industry detail page with SEO metadata and related industries.
     */
    public function show($slug)
    {
        try {
            Industry::ensureTableExists();
            $industry = Industry::where('slug', $slug)->where('is_active', true)->first();

            if (!$industry) {
                abort(404);
            }

            $related = Industry::where('slug', '!=', $slug)
                ->where('is_active', true)
                ->orderBy('sort_order', 'asc')
                ->take(3)
                ->get();
        } catch (\Throwable $e) {
            // Graceful fallback to static array if DB error
            $all = self::getIndustries();
            $found = null;
            foreach ($all as $item) {
                if ($item['slug'] === $slug) {
                    $found = (object) $item;
                    $found->image_url = asset($item['image']);
                    break;
                }
            }
            if (!$found) {
                abort(404);
            }
            $industry = $found;

            $related = collect($all)->filter(fn($i) => $i['slug'] !== $slug)->take(3)->map(function ($i) {
                $obj = (object) $i;
                $obj->image_url = asset($i['image']);
                return $obj;
            });
        }

        return view('industries.show', compact('industry', 'related'));
    }
}
