@extends('layouts.admin')

@section('title', 'Faculty & Staff Management · Advaita Admin')
@section('page_title', 'Faculty & Staff Manager')

@section('content')
<div class="academic-mgmt-wrapper">

    <!-- 1. Top Header Action Bar -->
    <div class="academic-top-bar">
        <div class="cph-title-wrap">
            <div class="cph-icon-box" style="background: linear-gradient(135deg, #F37021 0%, #d95d12 100%); color: #fff;">
                <i class="fa-solid fa-chalkboard-user"></i>
            </div>
            <div class="academic-top-title">
                <h3>Faculty &amp; Staff Members</h3>
                <p>Manage school leaders, department heads, and faculty profiles displayed on the "Our Staff" page.</p>
            </div>
        </div>
        <div class="d-flex align-items-center gap-12 flex-wrap">
            <a href="{{ route('our-staff') }}" target="_blank" class="btn-admin btn-secondary" title="View live page on frontend">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Live Our Staff Page</span>
            </a>
            <a href="{{ route('admin.staff.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-plus"></i>
                <span>Add Faculty Member</span>
            </a>
        </div>
    </div>

    <!-- 2. Overview Metrics Row -->
    <div class="pages-directory-metrics-grid">
        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $staffMembers->count() }}</h4>
                <span>Total Faculty Members</span>
            </div>
            <div class="dm-icon dm-icon-pages">
                <i class="fa-solid fa-users"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $staffMembers->where('is_active', true)->count() }}</h4>
                <span>Active on Frontend</span>
            </div>
            <div class="dm-icon dm-icon-fields">
                <i class="fa-solid fa-circle-check"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>{{ $staffMembers->filter(fn($s) => !empty($s->photo))->count() }}</h4>
                <span>Uploaded Photos</span>
            </div>
            <div class="dm-icon dm-icon-images">
                <i class="fa-solid fa-camera"></i>
            </div>
        </div>

        <div class="directory-metric-card">
            <div class="dm-info">
                <h4>/our-staff</h4>
                <span>Frontend Route</span>
            </div>
            <div class="dm-icon dm-icon-sync">
                <i class="fa-solid fa-link"></i>
            </div>
        </div>
    </div>

    <!-- 3. Section Header Customization Card -->
    <div class="cards-table-card mb-24" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 22px 24px;">
        <div class="d-flex align-items-center justify-content-between gap-12 flex-wrap mb-16 border-bottom pb-12">
            <div>
                <h4 style="margin: 0; font-size: 1.05rem; font-weight: 800; color: #083B7A;">
                    <i class="fa-solid fa-sliders text-orange me-2"></i> Section Heading &amp; Introduction
                </h4>
                <p style="margin: 4px 0 0; font-size: 0.82rem; color: #64748b;">Customize the section heading and description shown above the faculty cards grid.</p>
            </div>
        </div>

        <form action="{{ route('admin.staff.section-header') }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label font-weight-bold" style="font-size: 0.82rem; font-weight: 700; color: #334155;">Eyebrow Badge</label>
                    <input type="text" name="eyebrow" class="form-control" value="{{ old('eyebrow', $sectionHeader['eyebrow']) }}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label font-weight-bold" style="font-size: 0.82rem; font-weight: 700; color: #334155;">Heading Prefix</label>
                    <input type="text" name="title_prefix" class="form-control" value="{{ old('title_prefix', $sectionHeader['title_prefix']) }}" required>
                </div>
                <div class="col-md-5">
                    <label class="form-label font-weight-bold" style="font-size: 0.82rem; font-weight: 700; color: #334155;">Heading Highlight (Orange Text)</label>
                    <input type="text" name="title_highlight" class="form-control" value="{{ old('title_highlight', $sectionHeader['title_highlight']) }}">
                </div>
                <div class="col-12">
                    <label class="form-label font-weight-bold" style="font-size: 0.82rem; font-weight: 700; color: #334155;">Section Description Paragraph</label>
                    <textarea name="description" class="form-control" rows="2">{{ old('description', $sectionHeader['description']) }}</textarea>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn-admin btn-primary">
                        <i class="fa-solid fa-check"></i>
                        <span>Save Section Header</span>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- 4. Staff Members Registry Table -->
    <div class="cards-table-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden;">
        <div class="table-top-actions-bar" style="padding: 18px 24px; border-bottom: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
            <div>
                <h4 style="margin: 0; font-size: 1.05rem; font-weight: 800; color: #083B7A;">Faculty Roster ({{ $staffMembers->count() }})</h4>
                <p style="margin: 3px 0 0; font-size: 0.82rem; color: #64748b;">Profiles display in ascending display order.</p>
            </div>
            <a href="{{ route('admin.staff.create') }}" class="btn-admin btn-primary" style="padding: 8px 14px; font-size: 0.84rem;">
                <i class="fa-solid fa-plus"></i>
                <span>Add Member</span>
            </a>
        </div>

        <div class="table-responsive">
            <table class="table align-middle mb-0" style="width: 100%;">
                <thead style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                    <tr>
                        <th style="padding: 12px 18px; font-size: 0.78rem; font-weight: 800; color: #475569; text-transform: uppercase; width: 60px;">Order</th>
                        <th style="padding: 12px 18px; font-size: 0.78rem; font-weight: 800; color: #475569; text-transform: uppercase; width: 80px;">Photo</th>
                        <th style="padding: 12px 18px; font-size: 0.78rem; font-weight: 800; color: #475569; text-transform: uppercase;">Faculty Name</th>
                        <th style="padding: 12px 18px; font-size: 0.78rem; font-weight: 800; color: #475569; text-transform: uppercase;">Designation / Role</th>
                        <th style="padding: 12px 18px; font-size: 0.78rem; font-weight: 800; color: #475569; text-transform: uppercase;">Qualification</th>
                        <th style="padding: 12px 18px; font-size: 0.78rem; font-weight: 800; color: #475569; text-transform: uppercase; width: 100px;">Status</th>
                        <th style="padding: 12px 18px; font-size: 0.78rem; font-weight: 800; color: #475569; text-transform: uppercase; width: 140px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($staffMembers as $member)
                    <tr style="border-bottom: 1px solid #f1f5f9;">
                        <td style="padding: 14px 18px; font-weight: 700; color: #083B7A;">
                            <span class="badge bg-light text-dark border">{{ $member->order }}</span>
                        </td>
                        <td style="padding: 14px 18px;">
                            <div style="width: 44px; height: 44px; border-radius: 50%; overflow: hidden; background: #e0f2fe; display: flex; align-items: center; justify-content: center; border: 2px solid #fff; box-shadow: 0 2px 8px rgba(8, 59, 122, 0.1);">
                                @if($member->photo_url)
                                    <img src="{{ $member->photo_url }}" alt="{{ $member->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                                @else
                                    <i class="fa-solid fa-user text-secondary" style="font-size: 1.1rem;"></i>
                                @endif
                            </div>
                        </td>
                        <td style="padding: 14px 18px;">
                            <div style="font-weight: 800; color: #083B7A; font-size: 0.95rem;">{{ $member->name }}</div>
                        </td>
                        <td style="padding: 14px 18px;">
                            <span class="badge" style="background: rgba(8, 59, 122, 0.08); color: #083B7A; border: 1px solid rgba(8, 59, 122, 0.15); font-weight: 700; font-size: 0.76rem; letter-spacing: 0.3px;">
                                {{ $member->designation }}
                            </span>
                            <span class="badge bg-light text-muted border ms-1" style="font-size: 0.7rem; text-transform: capitalize;">{{ $member->badge_color }}</span>
                        </td>
                        <td style="padding: 14px 18px; font-size: 0.86rem; color: #475569; font-weight: 600;">
                            <i class="fa-solid fa-graduation-cap text-orange me-1"></i>
                            {{ $member->qualification }}
                        </td>
                        <td style="padding: 14px 18px;">
                            <form action="{{ route('admin.staff.toggle-status', $member->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-sm {{ $member->is_active ? 'btn-success' : 'btn-outline-secondary' }}" style="font-size: 0.75rem; border-radius: 20px; padding: 3px 10px; font-weight: 700;" title="Click to toggle active status">
                                    <i class="fa-solid {{ $member->is_active ? 'fa-circle-check' : 'fa-circle-xmark' }} me-1"></i>
                                    {{ $member->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                        <td style="padding: 14px 18px; text-align: right;">
                            <div class="d-flex align-items-center justify-content-end gap-8">
                                <a href="{{ route('admin.staff.edit', $member->id) }}" class="btn btn-sm btn-outline-primary" style="border-radius: 8px; padding: 4px 10px;" title="Edit Profile">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.staff.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove {{ addslashes($member->name) }}?');" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" style="border-radius: 8px; padding: 4px 10px;" title="Delete Member">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-40" style="color: #64748b;">
                            <i class="fa-solid fa-users mb-2" style="font-size: 2rem; color: #cbd5e1; display: block;"></i>
                            No faculty or staff members registered yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

