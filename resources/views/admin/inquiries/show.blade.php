@extends('layouts.admin')

@section('title', 'Inquiry from ' . $inquiry->name)
@section('page_title', 'View Inquiry Message')

@section('styles')
<style>
    .details-topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 24px;
        flex-wrap: wrap;
        gap: 16px;
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--admin-navy);
        text-decoration: none;
        font-weight: 700;
        font-size: 13.5px;
    }

    .inquiry-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 18px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        max-width: 800px;
    }

    .inquiry-header {
        border-bottom: 1px solid var(--admin-border);
        padding-bottom: 20px;
        margin-bottom: 24px;
    }

    .inquiry-sender-name {
        font-size: 20px;
        font-weight: 800;
        color: var(--admin-navy-deep);
        margin-bottom: 6px;
    }

    .inquiry-meta-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        font-size: 13.5px;
        color: #64748B;
    }

    .inquiry-meta-item {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .inquiry-meta-item i {
        color: var(--admin-orange);
    }

    .inquiry-subject-box {
        background: #F8FAFC;
        border-left: 4px solid var(--admin-navy);
        padding: 14px 18px;
        border-radius: 8px;
        margin-bottom: 24px;
    }

    .inquiry-subject-label {
        font-size: 11px;
        text-transform: uppercase;
        font-weight: 700;
        color: #64748B;
        letter-spacing: 0.5px;
    }

    .inquiry-subject-val {
        font-size: 16px;
        font-weight: 700;
        color: var(--admin-navy-deep);
        margin-top: 3px;
    }

    .inquiry-message-content {
        font-size: 15px;
        line-height: 1.7;
        color: #1E293B;
        background: #FAFAFA;
        padding: 24px;
        border-radius: 12px;
        border: 1px solid #F1F5F9;
        margin-bottom: 28px;
        white-space: pre-line;
    }

    .inquiry-actions-bar {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        align-items: center;
        justify-content: space-between;
        border-top: 1px solid var(--admin-border);
        padding-top: 20px;
    }

    .btn-contact-action {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 18px;
        border-radius: 10px;
        font-size: 13.5px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-email-reply {
        background: var(--admin-navy);
        color: #ffffff;
    }

    .btn-email-reply:hover {
        background: var(--admin-navy-deep);
    }

    .btn-phone-call {
        background: #E0F2FE;
        color: #0369A1;
    }

    .btn-phone-call:hover {
        background: #BAE6FD;
    }
</style>
@endsection

@section('content')

<div class="details-topbar">
    <a href="{{ route('admin.inquiries.index') }}" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Back to Inquiries</span>
    </a>

    <!-- Status Form -->
    <form action="{{ route('admin.inquiries.status', $inquiry->id) }}" method="POST" style="margin: 0; display: flex; gap: 8px; align-items: center;">
        @csrf
        @method('PATCH')
        <span style="font-size: 13px; font-weight: 700; color: #64748B;">Status:</span>
        <select name="status" class="filter-input" style="padding: 6px 12px; font-size: 13px;">
            <option value="new" {{ $inquiry->status == 'new' ? 'selected' : '' }}>New</option>
            <option value="in_progress" {{ $inquiry->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="resolved" {{ $inquiry->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
        </select>
        <button type="submit" class="btn-filter" style="padding: 6px 14px; font-size: 12px;">Update</button>
    </form>
</div>

<div class="inquiry-card">
    <div class="inquiry-header">
        <h2 class="inquiry-sender-name">{{ $inquiry->name }}</h2>
        <div class="inquiry-meta-row">
            <div class="inquiry-meta-item">
                <i class="fa-regular fa-envelope"></i>
                <a href="mailto:{{ $inquiry->email }}" style="color: inherit; text-decoration: none;">{{ $inquiry->email }}</a>
            </div>
            @if($inquiry->phone)
            <div class="inquiry-meta-item">
                <i class="fa-solid fa-phone"></i>
                <a href="tel:{{ $inquiry->phone }}" style="color: inherit; text-decoration: none;">{{ $inquiry->phone }}</a>
            </div>
            @endif
            <div class="inquiry-meta-item">
                <i class="fa-regular fa-clock"></i>
                <span>{{ $inquiry->created_at->format('d M Y, h:i A') }} ({{ $inquiry->created_at->diffForHumans() }})</span>
            </div>
        </div>
    </div>

    <!-- Subject Banner -->
    <div class="inquiry-subject-box">
        <div class="inquiry-subject-label">Subject</div>
        <div class="inquiry-subject-val">{{ $inquiry->subject ?? 'General Inquiry' }}</div>
    </div>

    <!-- Full Message Content -->
    <div class="inquiry-message-content">
        {{ $inquiry->message }}
    </div>

    <!-- Actions Bar -->
    <div class="inquiry-actions-bar">
        <div style="display: flex; gap: 10px;">
            <a href="mailto:{{ $inquiry->email }}?subject=Re: {{ rawurlencode($inquiry->subject ?? 'Your Inquiry at Advaita School') }}" class="btn-contact-action btn-email-reply">
                <i class="fa-solid fa-reply"></i>
                <span>Reply by Email</span>
            </a>
            @if($inquiry->phone)
            <a href="tel:{{ $inquiry->phone }}" class="btn-contact-action btn-phone-call">
                <i class="fa-solid fa-phone"></i>
                <span>Call Phone</span>
            </a>
            @endif
        </div>

        <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="POST" onsubmit="return confirm('Delete this inquiry permanently?');" style="margin: 0;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-delete" style="padding: 10px 14px; font-weight: 600;">
                <i class="fa-solid fa-trash-can"></i>
                <span>Delete Inquiry</span>
            </button>
        </form>
    </div>
</div>

@endsection
