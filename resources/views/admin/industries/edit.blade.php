@extends('admin.layouts.app')

@section('title', 'Edit Industry Sector — ' . $industry->title)
@section('page_header', 'Edit Industry Sector')

@section('content')
<div class="card" style="max-width: 950px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <div>
            <h2 style="font-size: 1.25rem; font-weight: 700;">Edit: {{ $industry->title }}</h2>
            <p style="color: var(--muted); font-size: 0.88rem;">Update sector information, images, technical specifications, and SEO metadata.</p>
        </div>
        <div style="display: flex; gap: 0.5rem;">
            <a href="{{ route('industries.show', $industry->slug) }}" target="_blank" class="btn-sm btn-secondary"><i class="fa-solid fa-arrow-up-right-from-square"></i> View Live</a>
            <a href="{{ route('admin.industries.index') }}" class="btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
        </div>
    </div>

    @if(isset($errors) && $errors->any())
        <div class="alert alert-error">
            <ul style="margin-left: 1.2rem;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.industries.update', $industry->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 1.2rem;">
            <div class="form-group">
                <label for="title">Industry Title *</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $industry->title) }}" required>
            </div>

            <div class="form-group">
                <label for="slug">URL Slug *</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', $industry->slug) }}">
            </div>
        </div>

        <div class="form-group">
            <label for="tagline">Short Tagline (Appears on Cards) *</label>
            <input type="text" id="tagline" name="tagline" class="form-control" value="{{ old('tagline', $industry->tagline) }}">
        </div>

        <div class="form-group">
            <label for="short_desc">Full Description *</label>
            <textarea id="short_desc" name="short_desc" class="form-control" rows="4">{{ old('short_desc', $industry->short_desc) }}</textarea>
        </div>

        <!-- Image Options: File upload OR Image URL -->
        <div style="background: #F8FAFC; border: 1px solid var(--border); border-radius: 8px; padding: 1.2rem; margin-bottom: 1.2rem;">
            <label style="font-weight: 700; font-size: 0.95rem; margin-bottom: 0.8rem; display: block;">Featured Image</label>
            
            @if($industry->image)
                <div style="display: flex; align-items: center; gap: 1.2rem; margin-bottom: 1rem; background: #fff; padding: 0.75rem; border-radius: 8px; border: 1px solid var(--border);">
                    <img src="{{ $industry->image_url }}" alt="{{ $industry->title }}" style="width: 120px; height: 75px; object-fit: cover; border-radius: 6px;">
                    <div>
                        <span style="font-size: 0.82rem; color: var(--muted); display: block;">Current Image Path:</span>
                        <code style="font-size: 0.85rem; word-break: break-all;">{{ $industry->image }}</code>
                    </div>
                </div>
            @endif

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.2rem;">
                <div class="form-group" style="margin-bottom: 0;">
                    <label for="image_file" style="font-size: 0.85rem; color: #475569;">Upload New File (JPG, PNG, WEBP)</label>
                    <input type="file" id="image_file" name="image_file" class="form-control" accept="image/*">
                </div>
                <div class="form-group" style="margin-bottom: 0;">
                    <label for="image_url" style="font-size: 0.85rem; color: #475569;">OR Update Image URL / Relative Path</label>
                    <input type="text" id="image_url" name="image_url" class="form-control" value="{{ old('image_url', $industry->image) }}">
                </div>
            </div>
            <small style="color: var(--muted); display: block; margin-top: 0.5rem;">Upload a new image file or update the URL. If left untouched, current image remains.</small>
        </div>

        <!-- Specifications / Highlights -->
        @php
            $rawHighlights = is_array($industry->highlights) ? implode("\n", $industry->highlights) : $industry->highlights;
        @endphp
        <div class="form-group">
            <label for="highlights">Key Engineering &amp; Sourcing Specifications (One per line)</label>
            <textarea id="highlights" name="highlights" class="form-control" rows="5">{{ old('highlights', $rawHighlights) }}</textarea>
            <small style="color: var(--muted); display: block; margin-top: 0.4rem;">Type each key feature / highlight on a new line. They will be displayed with checkmarks (✓) on the detail page.</small>
        </div>

        <!-- The Nexteck Advantage -->
        <div class="form-group">
            <label for="why_nexteck">The Nexteck Advantage ("Why Nexteck?")</label>
            <textarea id="why_nexteck" name="why_nexteck" class="form-control" rows="3">{{ old('why_nexteck', $industry->why_nexteck) }}</textarea>
        </div>

        <!-- SEO Section -->
        <div style="background: #FFFDF9; border: 1.5px solid #F5E8C7; border-radius: 8px; padding: 1.2rem; margin-bottom: 1.2rem;">
            <h3 style="font-size: 1rem; color: #92400E; font-weight: 700; margin-bottom: 0.8rem;"><i class="fa-solid fa-magnifying-glass-chart"></i> Search Engine Optimization (SEO)</h3>
            
            <div class="form-group">
                <label for="seo_title">SEO Page Title</label>
                <input type="text" id="seo_title" name="seo_title" class="form-control" value="{{ old('seo_title', $industry->seo_title) }}">
            </div>

            <div class="form-group">
                <label for="meta_desc">Meta Description</label>
                <textarea id="meta_desc" name="meta_desc" class="form-control" rows="2">{{ old('meta_desc', $industry->meta_desc) }}</textarea>
            </div>

            @php
                $rawKeywords = is_array($industry->keywords) ? implode(', ', $industry->keywords) : $industry->keywords;
            @endphp
            <div class="form-group" style="margin-bottom: 0;">
                <label for="keywords">Target SEO Keywords (Comma or newline separated)</label>
                <input type="text" id="keywords" name="keywords" class="form-control" value="{{ old('keywords', $rawKeywords) }}">
            </div>
        </div>

        <!-- Ordering and Visibility -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; align-items: center; margin-top: 1rem;">
            <div class="form-group" style="margin-bottom: 0;">
                <label for="sort_order">Sort Order (Top 6 display on Homepage!)</label>
                <input type="number" id="sort_order" name="sort_order" class="form-control" value="{{ old('sort_order', $industry->sort_order ?? 1) }}" min="1">
                <small style="color: var(--muted); display: block; margin-top: 0.3rem;">Order 1 to 6 will be featured directly on the home page.</small>
            </div>

            <div class="form-group" style="margin-bottom: 0; padding-top: 1.2rem;">
                <label style="display: flex; align-items: center; gap: 0.6rem; cursor: pointer;">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $industry->is_active) ? 'checked' : '' }} style="width: 20px; height: 20px; accent-color: var(--primary);">
                    <span style="font-weight: 600;">Publish as Active (Visible on website)</span>
                </label>
            </div>
        </div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <button type="submit" class="btn-sm btn-primary" style="padding: 0.75rem 1.8rem; font-size: 0.95rem;">
                <i class="fa-solid fa-floppy-disk"></i> Update Industry
            </button>
            <a href="{{ route('admin.industries.index') }}" class="btn-sm btn-secondary" style="padding: 0.75rem 1.5rem; font-size: 0.95rem;">Cancel</a>
        </div>
    </form>
</div>
@endsection
