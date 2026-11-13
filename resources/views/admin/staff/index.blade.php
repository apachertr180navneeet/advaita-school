@extends('layouts.admin')

@section('title', 'Faculty & Staff Directory · Advaita Admin')
@section('page_title', 'Faculty & Staff Manager')

@section('content')
<div class="academic-mgmt-wrapper">

    <!-- 1. Top Header Action Bar -->
    <div class="academic-top-bar">
        <div class="cph-title-wrap">
            <div class="cph-icon-box" style="background: linear-gradient(135deg, #083B7A 0%, #062b59 100%); color: #fff;">
                <i class="fa-solid fa-chalkboard-user"></i>
            </div>
            <div class="academic-top-title">
                <h3>Faculty &amp; Staff Members</h3>
                <p>Manage school leaders, department heads, and faculty profiles displayed on the public "Our Staff" page.</p>
            </div>
        </div>
        <div class="d-flex align-items-center gap-12 flex-wrap">
            <a href="{{ route('our-staff') }}" target="_blank" class="btn-admin btn-secondary" title="View live page on frontend">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Preview On Website</span>
            </a>
            <a href="{{ route('admin.staff.create') }}" class="btn-admin btn-primary">
                <i class="fa-solid fa-user-plus"></i>
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
                <span>Active on Website</span>
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

    <!-- 3. Section Heading & Intro Customizer -->
    <div class="form-container-card mb-24">
        <div class="d-flex align-items-center justify-content-between gap-12 flex-wrap mb-16 pb-12 border-bottom">
            <div class="d-flex align-items-center gap-10">
                <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(243, 112, 33, 0.12); color: #F37021; display: flex; align-items: center; justify-content: center; font-size: 15px;">
                    <i class="fa-solid fa-sliders"></i>
                </div>
                <div>
                    <h4 class="text-navy fs-16 font-extrabold m-0">Section Heading &amp; Introduction</h4>
                    <p class="text-muted fs-12 m-0">Customize the heading badge, title, and descriptive text shown above the faculty grid on the website.</p>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.staff.section-header') }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-grid-3">
                <div class="form-group">
                    <label class="form-label" for="sh_eyebrow">
                        <span>Eyebrow Pill Badge</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="sh_eyebrow" name="eyebrow" class="form-control @error('eyebrow') is-invalid @enderror"
                           value="{{ old('eyebrow', $sectionHeader['eyebrow']) }}" required placeholder="e.g. OUR EDUCATORS">
                    @error('eyebrow')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="sh_title_prefix">
                        <span>Heading Prefix</span>
                        <span class="required">*</span>
                    </label>
                    <input type="text" id="sh_title_prefix" name="title_prefix" class="form-control @error('title_prefix') is-invalid @enderror"
                           value="{{ old('title_prefix', $sectionHeader['title_prefix']) }}" required placeholder="e.g. The Teachers Behind Every">
                    @error('title_prefix')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="sh_title_highlight">
                        <span>Heading Highlight (Orange Text)</span>
                    </label>
                    <input type="text" id="sh_title_highlight" name="title_highlight" class="form-control @error('title_highlight') is-invalid @enderror"
                           value="{{ old('title_highlight', $sectionHeader['title_highlight']) }}" placeholder="e.g. Advaita Learner.">
                    @error('title_highlight')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group full-width mt-10">
                <label class="form-label" for="sh_description">
                    <span>Introductory Paragraph</span>
                </label>
                <textarea id="sh_description" name="description" class="form-control @error('description') is-invalid @enderror" rows="2"
                          placeholder="Write a warm note about faculty dedication and expertise...">{{ old('description', $sectionHeader['description']) }}</textarea>
                @error('description')
                    <span class="form-error-msg">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex justify-content-end mt-16">
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Save Section Header</span>
                </button>
            </div>
        </form>
    </div>

    <!-- 4. Staff Members Registry (Table & Visual Switcher) -->
    <div class="cards-table-card">
        <div class="table-top-actions-bar">
            <div class="d-flex align-items-center gap-12 flex-wrap">
                <h3 class="text-navy fs-16 font-extrabold d-flex align-items-center gap-8 m-0">
                    <i class="fa-solid fa-chalkboard-user text-orange"></i>
                    <span>Faculty Roster ({{ $staffMembers->count() }})</span>
                </h3>
                <span class="badge-blue-pill">
                    {{ $staffMembers->where('is_active', true)->count() }} Active
                </span>
            </div>

            <!-- View Switcher -->
            <div class="d-flex align-items-center gap-12">
                <div class="table-view-tabs">
                    <button type="button" class="view-tab-btn active" id="btnStaffTableView" onclick="setStaffView('table')">
                        <i class="fa-solid fa-table-list"></i>
                        <span>Table View</span>
                    </button>
                    <button type="button" class="view-tab-btn" id="btnStaffGridView" onclick="setStaffView('grid')">
                        <i class="fa-solid fa-grip"></i>
                        <span>Cards Preview</span>
                    </button>
                </div>
                <a href="{{ route('admin.staff.create') }}" class="btn-admin btn-primary">
                    <i class="fa-solid fa-plus"></i>
                    <span>Add Member</span>
                </a>
            </div>
        </div>

        <!-- 4A. Structured Table View -->
        <div class="table-responsive" id="staffTableContainer">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 70px; text-align: center;">Order</th>
                        <th style="width: 70px; text-align: center;">Photo</th>
                        <th>Faculty Name</th>
                        <th>Designation / Role</th>
                        <th>Qualification</th>
                        <th style="width: 120px; text-align: center;">Status</th>
                        <th style="width: 110px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($staffMembers as $member)
                    <tr>
                        <!-- Order -->
                        <td style="text-align: center;">
                            <span class="badge-neutral font-bold">#{{ $member->order }}</span>
                        </td>

                        <!-- Photo Thumbnail -->
                        <td style="text-align: center;">
                            <div class="staff-avatar-thumb">
                                @if($member->photo_url)
                                    <img src="{{ $member->photo_url }}" alt="{{ $member->name }}" loading="lazy">
                                @else
                                    <i class="fa-solid fa-user"></i>
                                @endif
                            </div>
                        </td>

                        <!-- Faculty Name -->
                        <td>
                            <div class="font-extrabold text-navy fs-14">{{ $member->name }}</div>
                            <span class="text-muted fs-11">ID: #{{ $member->id }}</span>
                        </td>

                        <!-- Designation / Role -->
                        <td>
                            <span class="staff-role-badge role-{{ $member->badge_color }}">
                                {{ $member->designation }}
                            </span>
                        </td>

                        <!-- Qualification -->
                        <td>
                            <div class="d-flex align-items-center gap-6 text-dark font-medium fs-13">
                                <i class="fa-solid fa-graduation-cap text-orange"></i>
                                <span>{{ $member->qualification }}</span>
                            </div>
                        </td>

                        <!-- Status Toggle -->
                        <td style="text-align: center;">
                            <form action="{{ route('admin.staff.toggle-status', $member->id) }}" method="POST" class="m-0">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="status-pill {{ $member->is_active ? 'active' : 'inactive' }}" title="Click to toggle status on public website">
                                    <i class="fa-solid {{ $member->is_active ? 'fa-check' : 'fa-xmark' }}"></i>
                                    <span>{{ $member->is_active ? 'Active' : 'Hidden' }}</span>
                                </button>
                            </form>
                        </td>

                        <!-- Actions -->
                        <td style="text-align: right;">
                            <div class="btn-action-group">
                                <a href="{{ route('admin.staff.edit', $member->id) }}" class="btn-act btn-act-edit" title="Edit Profile">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.staff.destroy', $member->id) }}" method="POST" class="m-0"
                                      onsubmit="return confirm('Are you sure you want to remove {{ addslashes($member->name) }}?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-act btn-act-del" title="Delete Profile">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-40">
                            <div class="p-30 text-center">
                                <i class="fa-solid fa-chalkboard-user fs-36 text-muted mb-12" style="display: block;"></i>
                                <h4 class="text-navy font-bold fs-16 mb-6">No faculty members found</h4>
                                <p class="text-muted fs-13 mb-16">Add school leadership and teaching faculty to showcase on the Our Staff page.</p>
                                <a href="{{ route('admin.staff.create') }}" class="btn-admin btn-primary">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Add Faculty Member</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- 4B. Visual Cards Grid (Toggled Mode) -->
        <div class="staff-cards-grid" id="staffGridContainer" style="display: none;">
            @forelse($staffMembers as $member)
            <div class="staff-grid-card">
                <!-- Order Pill -->
                <div class="staff-card-order-badge">#{{ $member->order }}</div>

                <!-- Avatar -->
                <div class="staff-card-avatar">
                    @if($member->photo_url)
                        <img src="{{ $member->photo_url }}" alt="{{ $member->name }}" loading="lazy">
                    @else
                        <i class="fa-solid fa-user"></i>
                    @endif
                </div>

                <!-- Role Badge -->
                <span class="staff-role-badge role-{{ $member->badge_color }} mb-6">
                    {{ $member->designation }}
                </span>

                <!-- Name -->
                <h4 class="staff-card-name">{{ $member->name }}</h4>

                <!-- Qualification -->
                <div class="staff-card-qual">
                    <i class="fa-solid fa-graduation-cap text-orange"></i>
                    <span>{{ $member->qualification }}</span>
                </div>

                <!-- Card Footer Actions -->
                <div class="staff-card-footer">
                    <form action="{{ route('admin.staff.toggle-status', $member->id) }}" method="POST" class="m-0">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="status-pill {{ $member->is_active ? 'active' : 'inactive' }}" title="Click to toggle active status">
                            <i class="fa-solid {{ $member->is_active ? 'fa-check' : 'fa-xmark' }}"></i>
                            <span>{{ $member->is_active ? 'Active' : 'Hidden' }}</span>
                        </button>
                    </form>

                    <div class="btn-action-group">
                        <a href="{{ route('admin.staff.edit', $member->id) }}" class="btn-act btn-act-edit" title="Edit">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('admin.staff.destroy', $member->id) }}" method="POST" class="m-0"
                              onsubmit="return confirm('Are you sure you want to remove {{ addslashes($member->name) }}?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-act btn-act-del" title="Delete">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="p-30 text-center full-width" style="grid-column: 1 / -1;">
                <p class="text-muted fs-13 m-0">No faculty members found.</p>
            </div>
            @endforelse
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script>
function setStaffView(view) {
    const tableContainer = document.getElementById('staffTableContainer');
    const gridContainer = document.getElementById('staffGridContainer');
    const btnTable = document.getElementById('btnStaffTableView');
    const btnGrid = document.getElementById('btnStaffGridView');

    if (!tableContainer || !gridContainer) return;

    if (view === 'grid') {
        tableContainer.style.display = 'none';
        gridContainer.style.display = 'grid';
        btnTable.classList.remove('active');
        btnGrid.classList.add('active');
        localStorage.setItem('advaita_admin_staff_view', 'grid');
    } else {
        tableContainer.style.display = 'block';
        gridContainer.style.display = 'none';
        btnTable.classList.add('active');
        btnGrid.classList.remove('active');
        localStorage.setItem('advaita_admin_staff_view', 'table');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const savedView = localStorage.getItem('advaita_admin_staff_view') || 'table';
    setStaffView(savedView);
});
</script>
@endsection
