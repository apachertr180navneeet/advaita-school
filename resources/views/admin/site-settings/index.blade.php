@extends('layouts.admin')

@section('title', 'Global Site & Contact Settings')

@section('content')
<div class="admin-page-header">
    <div class="header-left">
        <h1 class="page-title">Global Site &amp; Contact Settings</h1>
        <p class="page-subtitle">Configure school identity, affiliation details, contact numbers, email, physical address, and social media channels.</p>
    </div>
    <div class="header-right">
        <a href="{{ route('home') }}" target="_blank" class="btn-action-view" style="padding: 10px 18px;">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <span>View Live Website</span>
        </a>
    </div>
</div>

<form action="{{ route('admin.site-settings.update') }}" method="POST">
    @csrf
    @method('PATCH')

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(420px, 1fr)); gap: 24px; align-items: start;">
        
        <!-- Card 1: School Identity & Affiliation -->
        <div style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
            <div style="display: flex; align-items: center; gap: 10px; border-bottom: 1px solid var(--admin-border); padding-bottom: 14px; margin-bottom: 20px;">
                <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(8, 59, 122, 0.1); color: var(--admin-navy); display: flex; align-items: center; justify-content: center; font-size: 16px;">
                    <i class="fa-solid fa-school"></i>
                </div>
                <div>
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--admin-text-main); margin: 0;">School Identity &amp; Affiliation</h3>
                    <span style="font-size: 12px; color: var(--admin-text-muted);">Core branding and official recognition</span>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 16px;">
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">School Name <span style="color: #EF4444;">*</span></label>
                    <input type="text" name="site_school_name" value="{{ old('site_school_name', $settings['site_school_name']) }}" required style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">Trust / Tagline</label>
                    <input type="text" name="site_tagline" value="{{ old('site_tagline', $settings['site_tagline']) }}" style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">CBSE Affiliation No.</label>
                        <input type="text" name="site_affiliation_no" value="{{ old('site_affiliation_no', $settings['site_affiliation_no']) }}" style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                    </div>
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">School Code</label>
                        <input type="text" name="site_school_code" value="{{ old('site_school_code', $settings['site_school_code']) }}" style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2: Contact Numbers & WhatsApp -->
        <div style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
            <div style="display: flex; align-items: center; gap: 10px; border-bottom: 1px solid var(--admin-border); padding-bottom: 14px; margin-bottom: 20px;">
                <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(16, 185, 129, 0.1); color: var(--admin-success); display: flex; align-items: center; justify-content: center; font-size: 16px;">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div>
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--admin-text-main); margin: 0;">Phone &amp; WhatsApp</h3>
                    <span style="font-size: 12px; color: var(--admin-text-muted);">Displayed on topbar, banner, &amp; footer</span>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 16px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">Primary Mobile <span style="color: #EF4444;">*</span></label>
                        <input type="text" name="site_phone_primary" value="{{ old('site_phone_primary', $settings['site_phone_primary']) }}" required style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                    </div>
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">Secondary Mobile</label>
                        <input type="text" name="site_phone_secondary" value="{{ old('site_phone_secondary', $settings['site_phone_secondary']) }}" style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">Landline Office</label>
                        <input type="text" name="site_landline" value="{{ old('site_landline', $settings['site_landline']) }}" style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                    </div>
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">WhatsApp Direct (With Country Code)</label>
                        <input type="text" name="site_whatsapp_number" value="{{ old('site_whatsapp_number', $settings['site_whatsapp_number']) }}" placeholder="919413062851" style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3: Email Addresses & Timings -->
        <div style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
            <div style="display: flex; align-items: center; gap: 10px; border-bottom: 1px solid var(--admin-border); padding-bottom: 14px; margin-bottom: 20px;">
                <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(2, 132, 199, 0.1); color: var(--admin-info); display: flex; align-items: center; justify-content: center; font-size: 16px;">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--admin-text-main); margin: 0;">Email &amp; Campus Hours</h3>
                    <span style="font-size: 12px; color: var(--admin-text-muted);">Enquiry emails and working shifts</span>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 16px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">Primary School Email <span style="color: #EF4444;">*</span></label>
                        <input type="email" name="site_email_primary" value="{{ old('site_email_primary', $settings['site_email_primary']) }}" required style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                    </div>
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">Admissions Desk Email</label>
                        <input type="email" name="site_email_admissions" value="{{ old('site_email_admissions', $settings['site_email_admissions']) }}" style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">School Hours (Students)</label>
                        <input type="text" name="site_school_hours" value="{{ old('site_school_hours', $settings['site_school_hours']) }}" style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                    </div>
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">Admin Office Hours</label>
                        <input type="text" name="site_office_hours" value="{{ old('site_office_hours', $settings['site_office_hours']) }}" style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4: Physical Address & Google Map -->
        <div style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
            <div style="display: flex; align-items: center; gap: 10px; border-bottom: 1px solid var(--admin-border); padding-bottom: 14px; margin-bottom: 20px;">
                <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(243, 112, 33, 0.1); color: var(--admin-orange); display: flex; align-items: center; justify-content: center; font-size: 16px;">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--admin-text-main); margin: 0;">Address &amp; Google Map</h3>
                    <span style="font-size: 12px; color: var(--admin-text-muted);">Campus location and embedded map</span>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 16px;">
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">Official School Address <span style="color: #EF4444;">*</span></label>
                    <textarea name="site_address" rows="2" required style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 14px; resize: vertical;">{{ old('site_address', $settings['site_address']) }}</textarea>
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">Google Map Embed Iframe URL</label>
                    <input type="text" name="site_google_map_embed" value="{{ old('site_google_map_embed', $settings['site_google_map_embed']) }}" placeholder="https://maps.google.com/..." style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13px;">
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">Google Map External Place Link</label>
                    <input type="text" name="site_google_map_link" value="{{ old('site_google_map_link', $settings['site_google_map_link']) }}" placeholder="https://maps.google.com/place/..." style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13px;">
                </div>
            </div>
        </div>

        <!-- Card 5: Social Media Profiles -->
        <div style="background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.03); grid-column: 1 / -1;">
            <div style="display: flex; align-items: center; gap: 10px; border-bottom: 1px solid var(--admin-border); padding-bottom: 14px; margin-bottom: 20px;">
                <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(139, 92, 246, 0.1); color: #8B5CF6; display: flex; align-items: center; justify-content: center; font-size: 16px;">
                    <i class="fa-solid fa-share-nodes"></i>
                </div>
                <div>
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--admin-text-main); margin: 0;">Social Media Channels</h3>
                    <span style="font-size: 12px; color: var(--admin-text-muted);">Links appear in header, mobile drawer, and footer</span>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px;">
                <div>
                    <label style="display: flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">
                        <i class="fa-brands fa-facebook" style="color: #1877F2;"></i> Facebook URL
                    </label>
                    <input type="url" name="site_facebook_url" value="{{ old('site_facebook_url', $settings['site_facebook_url']) }}" placeholder="https://facebook.com/..." style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px;">
                </div>

                <div>
                    <label style="display: flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">
                        <i class="fa-brands fa-instagram" style="color: #E4405F;"></i> Instagram URL
                    </label>
                    <input type="url" name="site_instagram_url" value="{{ old('site_instagram_url', $settings['site_instagram_url']) }}" placeholder="https://instagram.com/..." style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px;">
                </div>

                <div>
                    <label style="display: flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">
                        <i class="fa-brands fa-youtube" style="color: #FF0000;"></i> YouTube URL
                    </label>
                    <input type="url" name="site_youtube_url" value="{{ old('site_youtube_url', $settings['site_youtube_url']) }}" placeholder="https://youtube.com/..." style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px;">
                </div>

                <div>
                    <label style="display: flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #334155;">
                        <i class="fa-brands fa-linkedin" style="color: #0A66C2;"></i> LinkedIn URL
                    </label>
                    <input type="url" name="site_linkedin_url" value="{{ old('site_linkedin_url', $settings['site_linkedin_url']) }}" placeholder="https://linkedin.com/..." style="width: 100%; padding: 10px 14px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 13.5px;">
                </div>
            </div>
        </div>

    </div>

    <!-- Submit Toolbar -->
    <div style="margin-top: 24px; padding: 18px 24px; background: #ffffff; border: 1px solid var(--admin-border); border-radius: 14px; display: flex; align-items: center; justify-content: space-between;">
        <span style="font-size: 13px; color: var(--admin-text-muted);">
            <i class="fa-solid fa-circle-info" style="color: var(--admin-info); margin-right: 4px;"></i>
            Changes will take effect instantly across the live website.
        </span>
        <button type="submit" class="btn-action-view" style="background: var(--admin-navy); color: #fff; padding: 12px 28px; font-size: 14px; border: none; cursor: pointer; border-radius: 10px;">
            <i class="fa-solid fa-floppy-disk"></i>
            <span>Save Global Site Settings</span>
        </button>
    </div>
</form>
@endsection
