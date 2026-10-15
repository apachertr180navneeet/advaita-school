@extends('layouts.admin')

@section('title', 'Parent Testimonials Management')
@section('page_title', 'Parent Testimonials (Voices That Inspire Us)')



@section('content')
<div class="testi-mgmt-wrapper">

    <!-- Top Action Bar -->
    <div class="testi-top-bar">
        <div class="testi-top-title">
            <h3>Parent Testimonials Management</h3>
            <p>Manage genuine parent quotes, star ratings, student grade notes, and avatars displayed in Section 8.</p>
        </div>
        <div class="d-flex align-items-center gap-10">
            <a href="{{ route('home') }}#testimonials" target="_blank" class="btn-admin btn-secondary" title="View live on Homepage">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>View on Homepage</span>
            </a>
            <a href="{{ route('admin.testimonials.section-header') }}" class="btn-admin btn-secondary" title="Edit section header on a separate page">
                <i class="fa-solid fa-sliders"></i>
                <span>Edit Section Header</span>
            </a>
            <a href="{{ route('admin.testimonials.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Testimonial</span>
            </a>
        </div>
    </div>

    <!-- Metrics Row -->
    <div class="testi-metrics-grid">
        <div class="testi-metric-card">
            <div class="testi-metric-info">
                <h4>{{ $testimonials->count() }}</h4>
                <span>Total Testimonials</span>
            </div>
            <div class="testi-metric-icon metric-icon-total">
                <i class="fa-solid fa-comment-dots"></i>
            </div>
        </div>
        <div class="testi-metric-card">
            <div class="testi-metric-info">
                <h4>{{ $testimonials->where('is_active', true)->count() }}</h4>
                <span>Active on Homepage</span>
            </div>
            <div class="testi-metric-icon metric-icon-active">
                <i class="fa-solid fa-check"></i>
            </div>
        </div>
        <div class="testi-metric-card">
            <div class="testi-metric-info">
                <h4>{{ $testimonials->avg('rating') ? number_format($testimonials->avg('rating'), 1) : '5.0' }} <span class="fs-14 text-warning">★</span></h4>
                <span>Average Rating</span>
            </div>
            <div class="testi-metric-icon metric-icon-orange">
                <i class="fa-solid fa-star"></i>
            </div>
        </div>
    </div>



    <!-- Testimonial Cards Grid -->
    <div class="testi-grid-cards">
        @forelse($testimonials as $testi)
        <div class="testi-card-item theme-{{ $testi->theme_color === 'blue' ? 'blue' : 'orange' }}">
            <div class="testi-top-row">
                <div class="testi-stars-row">
                    @for($i = 1; $i <= ($testi->rating ?: 5); $i++)
                        <i class="fa-solid fa-star"></i>
                    @endfor
                </div>
                <div class="d-flex align-items-center gap-8">
                    <span class="theme-pill {{ $testi->theme_color === 'blue' ? 'blue' : 'orange' }}">{{ ucfirst($testi->theme_color) }} Theme</span>
                    <span class="text-muted fs-11 font-extrabold">#{{ $testi->order }}</span>
                </div>
            </div>

            <p class="testi-quote-text">
                &ldquo;{{ $testi->content }}&rdquo;
            </p>

            <div class="testi-author-row">
                <img src="{{ $testi->avatar_url }}" alt="{{ $testi->parent_name }}" class="testi-avatar-img">
                <div class="testi-author-meta">
                    <h5>{{ $testi->parent_name }}</h5>
                    <span>{{ $testi->child_info ?: 'Parent at Advaita' }}</span>
                </div>
            </div>

            <div class="testi-footer-bar">
                <form action="{{ route('admin.testimonials.toggle-status', $testi->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn-reset-raw">
                        <span class="status-badge {{ $testi->is_active ? 'active' : 'inactive' }}" title="Click to toggle status">
                            <i class="fa-solid {{ $testi->is_active ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                            <span>{{ $testi->is_active ? 'Active' : 'Hidden' }}</span>
                        </span>
                    </button>
                </form>

                <div class="action-btns-group">
                    <a href="{{ route('admin.testimonials.edit', $testi->id) }}" class="btn-action btn-action-edit" title="Edit Testimonial">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{ route('admin.testimonials.destroy', $testi->id) }}" method="POST" data-confirm="Delete testimonial from '{{ addslashes($testi->parent_name) }}'?" data-confirm-title="Delete Testimonial" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-action btn-action-delete" title="Delete Testimonial">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="admin-empty-dashed-box">
            <i class="fa-solid fa-comment-dots empty-icon-lg"></i>
            <h4 class="text-navy mb-6">No Testimonials Found</h4>
            <p class="text-muted fs-13 mb-16">Add your first parent feedback review to display on the homepage.</p>
            <a href="{{ route('admin.testimonials.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Testimonial</span>
            </a>
        </div>
        @endforelse
    </div>

</div>
@endsection
