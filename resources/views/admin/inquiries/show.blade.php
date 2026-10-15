@extends('layouts.admin')

@section('title', 'Inquiry from ' . $inquiry->name)
@section('page_title', 'View Inquiry Message')



@section('content')

<div class="details-topbar">
    <a href="{{ route('admin.inquiries.index') }}" class="btn-back">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Back to Inquiries</span>
    </a>

    <!-- Status Form -->
    <form action="{{ route('admin.inquiries.status', $inquiry->id) }}" method="POST" class="m-0 d-flex gap-8 align-items-center">
        @csrf
        @method('PATCH')
        <span class="text-muted fs-13 font-bold">Status:</span>
        <select name="status" class="filter-input btn-pad-md-sm">
            <option value="new" {{ $inquiry->status == 'new' ? 'selected' : '' }}>New</option>
            <option value="in_progress" {{ $inquiry->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="resolved" {{ $inquiry->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
        </select>
        <button type="submit" class="btn-filter btn-pad-md-sm">Update</button>
    </form>
</div>

<div class="inquiry-card">
    <div class="inquiry-header">
        <h2 class="inquiry-sender-name">{{ $inquiry->name }}</h2>
        <div class="inquiry-meta-row">
            <div class="inquiry-meta-item">
                <i class="fa-regular fa-envelope"></i>
                <a href="mailto:{{ $inquiry->email }}" class="text-inherit-link">{{ $inquiry->email }}</a>
            </div>
            @if($inquiry->phone)
            <div class="inquiry-meta-item">
                <i class="fa-solid fa-phone"></i>
                <a href="tel:{{ $inquiry->phone }}" class="text-inherit-link">{{ $inquiry->phone }}</a>
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
        <div class="d-flex gap-10">
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

        <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="POST" data-confirm="Delete this inquiry permanently?" data-confirm-title="Delete Inquiry" class="m-0">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-delete btn-pad-lg">
                <i class="fa-solid fa-trash-can"></i>
                <span>Delete Inquiry</span>
            </button>
        </form>
    </div>
</div>

@endsection
