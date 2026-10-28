@extends('admin.layouts.app')

@section('title', 'Manage Industries')
@section('page_header', 'Industry Management')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem;">
        <div>
            <h2 style="font-size: 1.25rem; font-weight: 700;">All Industries &amp; Sectors</h2>
            <p style="color: var(--muted); font-size: 0.88rem; margin-top: 0.2rem;">
                Manage dynamic sectors. The top 6 active industries (sorted by Sort Order 1 to 6) appear on the homepage.
            </p>
        </div>
        <div style="display: flex; gap: 0.75rem; align-items: center;">
            <form action="{{ route('admin.industries.index') }}" method="GET" style="display: flex; gap: 0.4rem;">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search industries..." class="form-control" style="padding: 0.45rem 0.8rem; font-size: 0.88rem; min-width: 200px;">
                <button type="submit" class="btn-sm btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></button>
                @if(request('search'))
                    <a href="{{ route('admin.industries.index') }}" class="btn-sm btn-secondary" title="Clear Search"><i class="fa-solid fa-xmark"></i></a>
                @endif
            </form>
            <a href="{{ route('admin.industries.create') }}" class="btn-sm btn-primary" style="white-space: nowrap;">
                <i class="fa-solid fa-plus"></i> Add New Industry
            </a>
        </div>
    </div>

    @if($industries->count() > 0)
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th style="width: 75px;">Image</th>
                        <th>Industry Title &amp; Slug</th>
                        <th style="max-width: 250px;">Tagline</th>
                        <th style="width: 100px; text-align: center;">Sort Order</th>
                        <th style="width: 100px; text-align: center;">Status</th>
                        <th style="text-align: right; width: 200px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($industries as $item)
                        <tr>
                            <td>
                                @if($item->image)
                                    <img src="{{ $item->image_url }}" alt="{{ $item->title }}" style="width: 60px; height: 42px; object-fit: cover; border-radius: 6px; border: 1px solid var(--border);">
                                @else
                                    <div style="width: 60px; height: 42px; background: #E2E8F0; border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 0.72rem; color: #64748B;">No Img</div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $item->title }}</strong>
                                @if($item->sort_order <= 6 && $item->is_active)
                                    <span class="badge" style="background: rgba(14, 165, 233, 0.15); color: #0EA5E9; font-size: 0.7rem; margin-left: 0.4rem;">Homepage Top 6</span>
                                @endif
                                <br><small style="color: var(--muted);"><i class="fa-solid fa-link" style="font-size: 0.75rem;"></i> /industries/{{ $item->slug }}</small>
                            </td>
                            <td style="max-width: 250px; font-size: 0.88rem; color: #475569;">
                                {{ Str::limit($item->tagline, 75) }}
                            </td>
                            <td style="text-align: center;">
                                <span class="badge badge-secondary" style="font-size: 0.88rem; padding: 0.3rem 0.65rem; font-weight: 700;">
                                    #{{ $item->sort_order ?? 1 }}
                                </span>
                            </td>
                            <td style="text-align: center;">
                                @if($item->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-secondary">Inactive</span>
                                @endif
                            </td>
                            <td style="text-align: right;">
                                <a href="{{ route('industries.show', $item->slug) }}" target="_blank" class="btn-sm btn-secondary" style="margin-right: 0.25rem;" title="View Live"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                <a href="{{ route('admin.industries.edit', $item->id ?? $loop->iteration) }}" class="btn-sm btn-primary" style="margin-right: 0.25rem;" title="Edit"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <form action="{{ route('admin.industries.destroy', $item->id ?? $loop->iteration) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this industry sector?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-sm btn-danger" title="Delete"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination-container">
            {{ $industries->links('partials.pagination') }}
        </div>
    @else
        <div style="text-align: center; padding: 3rem 1rem;">
            <i class="fa-solid fa-industry" style="font-size: 2.5rem; color: #94A3B8; margin-bottom: 1rem;"></i>
            <p style="color: var(--muted); font-size: 1rem; margin-bottom: 1rem;">No industries found.</p>
            <a href="{{ route('admin.industries.create') }}" class="btn-sm btn-primary">+ Create New Industry</a>
        </div>
    @endif
</div>
@endsection
