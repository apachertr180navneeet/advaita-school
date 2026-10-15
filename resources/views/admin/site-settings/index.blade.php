@extends('layouts.admin')

@section('title', 'Global Site & Contact Settings')

@section('content')
<div class="admin-page-header">
    <div class="header-left">
        <h1 class="page-title">Global Site &amp; Contact Settings</h1>
        <p class="page-subtitle">Configure school identity, affiliation details, contact numbers, email, physical address, and social media channels.</p>
    </div>
    <div class="header-right">
        <a href="{{ route('home') }}" target="_blank" class="btn-action-view btn-pad-md">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <span>View Live Website</span>
        </a>
    </div>
</div>

<form action="{{ route('admin.site-settings.update') }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="settings-master-grid">
        
        <!-- Card 1: School Identity & Affiliation -->
        <div class="settings-card">
            <div class="settings-card-header">
                <div class="settings-card-icon settings-icon-navy">
                    <i class="fa-solid fa-school"></i>
                </div>
                <div>
                    <h3 class="settings-card-title">School Identity &amp; Affiliation</h3>
                    <span class="settings-card-subtitle">Core branding and official recognition</span>
                </div>
            </div>

            <div class="settings-card-body">
                <div>
                    <label class="settings-label">School Name <span class="text-danger">*</span></label>
                    <input type="text" name="site_school_name" value="{{ old('site_school_name', $settings['site_school_name']) }}" required class="settings-input-control">
                </div>

                <div>
                    <label class="settings-label">Trust / Tagline</label>
                    <input type="text" name="site_tagline" value="{{ old('site_tagline', $settings['site_tagline']) }}" class="settings-input-control">
                </div>

                <div class="settings-row-2col">
                    <div>
                        <label class="settings-label">CBSE Affiliation No.</label>
                        <input type="text" name="site_affiliation_no" value="{{ old('site_affiliation_no', $settings['site_affiliation_no']) }}" class="settings-input-control">
                    </div>
                    <div>
                        <label class="settings-label">School Code</label>
                        <input type="text" name="site_school_code" value="{{ old('site_school_code', $settings['site_school_code']) }}" class="settings-input-control">
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2: Contact Numbers & WhatsApp -->
        <div class="settings-card">
            <div class="settings-card-header">
                <div class="settings-card-icon settings-icon-success">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div>
                    <h3 class="settings-card-title">Phone &amp; WhatsApp</h3>
                    <span class="settings-card-subtitle">Displayed on topbar, banner, &amp; footer</span>
                </div>
            </div>

            <div class="settings-card-body">
                <div class="settings-row-2col">
                    <div>
                        <label class="settings-label">Primary Mobile <span class="text-danger">*</span></label>
                        <input type="text" name="site_phone_primary" value="{{ old('site_phone_primary', $settings['site_phone_primary']) }}" required class="settings-input-control">
                    </div>
                    <div>
                        <label class="settings-label">Secondary Mobile</label>
                        <input type="text" name="site_phone_secondary" value="{{ old('site_phone_secondary', $settings['site_phone_secondary']) }}" class="settings-input-control">
                    </div>
                </div>

                <div class="settings-row-2col">
                    <div>
                        <label class="settings-label">Landline Office</label>
                        <input type="text" name="site_landline" value="{{ old('site_landline', $settings['site_landline']) }}" class="settings-input-control">
                    </div>
                    <div>
                        <label class="settings-label">WhatsApp Direct (With Country Code)</label>
                        <input type="text" name="site_whatsapp_number" value="{{ old('site_whatsapp_number', $settings['site_whatsapp_number']) }}" placeholder="919413062851" class="settings-input-control">
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3: Email Addresses & Timings -->
        <div class="settings-card">
            <div class="settings-card-header">
                <div class="settings-card-icon settings-icon-info">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                    <h3 class="settings-card-title">Email &amp; Campus Hours</h3>
                    <span class="settings-card-subtitle">Enquiry emails and working shifts</span>
                </div>
            </div>

            <div class="settings-card-body">
                <div class="settings-row-2col">
                    <div>
                        <label class="settings-label">Primary School Email <span class="text-danger">*</span></label>
                        <input type="email" name="site_email_primary" value="{{ old('site_email_primary', $settings['site_email_primary']) }}" required class="settings-input-control">
                    </div>
                    <div>
                        <label class="settings-label">Admissions Desk Email</label>
                        <input type="email" name="site_email_admissions" value="{{ old('site_email_admissions', $settings['site_email_admissions']) }}" class="settings-input-control">
                    </div>
                </div>

                <div class="settings-row-2col">
                    <div>
                        <label class="settings-label">School Hours (Students)</label>
                        <input type="text" name="site_school_hours" value="{{ old('site_school_hours', $settings['site_school_hours']) }}" class="settings-input-control">
                    </div>
                    <div>
                        <label class="settings-label">Admin Office Hours</label>
                        <input type="text" name="site_office_hours" value="{{ old('site_office_hours', $settings['site_office_hours']) }}" class="settings-input-control">
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4: Physical Address & Google Map -->
        <div class="settings-card">
            <div class="settings-card-header">
                <div class="settings-card-icon settings-icon-orange">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                    <h3 class="settings-card-title">Address &amp; Google Map</h3>
                    <span class="settings-card-subtitle">Campus location and embedded map</span>
                </div>
            </div>

            <div class="settings-card-body">
                <div>
                    <label class="settings-label">Official School Address <span class="text-danger">*</span></label>
                    <textarea name="site_address" rows="2" required class="settings-textarea-control">{{ old('site_address', $settings['site_address']) }}</textarea>
                </div>

                <div>
                    <label class="settings-label">Google Map Embed Iframe URL</label>
                    <input type="text" name="site_google_map_embed" value="{{ old('site_google_map_embed', $settings['site_google_map_embed']) }}" placeholder="https://maps.google.com/..." class="settings-input-control">
                </div>

                <div>
                    <label class="settings-label">Google Map External Place Link</label>
                    <input type="text" name="site_google_map_link" value="{{ old('site_google_map_link', $settings['site_google_map_link']) }}" placeholder="https://maps.google.com/place/..." class="settings-input-control">
                </div>
            </div>
        </div>

        <!-- Card 5: Social Media Profiles -->
        <div class="settings-card-full">
            <div class="settings-card-header">
                <div class="settings-card-icon settings-icon-purple">
                    <i class="fa-solid fa-share-nodes"></i>
                </div>
                <div>
                    <h3 class="settings-card-title">Social Media Channels</h3>
                    <span class="settings-card-subtitle">Links appear in header, mobile drawer, and footer</span>
                </div>
            </div>

            <div class="settings-social-grid">
                <div>
                    <label class="settings-social-label">
                        <i class="fa-brands fa-facebook text-facebook"></i> Facebook URL
                    </label>
                    <input type="url" name="site_facebook_url" value="{{ old('site_facebook_url', $settings['site_facebook_url']) }}" placeholder="https://facebook.com/..." class="settings-input-control">
                </div>

                <div>
                    <label class="settings-social-label">
                        <i class="fa-brands fa-instagram text-instagram"></i> Instagram URL
                    </label>
                    <input type="url" name="site_instagram_url" value="{{ old('site_instagram_url', $settings['site_instagram_url']) }}" placeholder="https://instagram.com/..." class="settings-input-control">
                </div>

                <div>
                    <label class="settings-social-label">
                        <i class="fa-brands fa-youtube text-youtube"></i> YouTube URL
                    </label>
                    <input type="url" name="site_youtube_url" value="{{ old('site_youtube_url', $settings['site_youtube_url']) }}" placeholder="https://youtube.com/..." class="settings-input-control">
                </div>

                <div>
                    <label class="settings-social-label">
                        <i class="fa-brands fa-linkedin text-linkedin"></i> LinkedIn URL
                    </label>
                    <input type="url" name="site_linkedin_url" value="{{ old('site_linkedin_url', $settings['site_linkedin_url']) }}" placeholder="https://linkedin.com/..." class="settings-input-control">
                </div>
            </div>
        </div>

    </div>

    <!-- Submit Toolbar -->
    <div class="settings-bottom-bar">
        <span class="text-muted">
            <i class="fa-solid fa-circle-info text-info mr-4"></i>
            Changes will take effect instantly across the live website.
        </span>
        <button type="submit" class="btn-save-clean">
            <i class="fa-solid fa-floppy-disk"></i>
            <span>Save Global Site Settings</span>
        </button>
    </div>
</form>
@endsection
