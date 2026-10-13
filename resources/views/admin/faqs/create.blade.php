@extends('layouts.admin')

@section('title', 'Add FAQ Question')
@section('page_title', 'Add New FAQ Question')

@section('styles')
<style>
    .form-card {
        background: #ffffff;
        border: 1px solid var(--admin-border);
        border-radius: 18px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        overflow: hidden;
        max-width: 860px;
        margin: 0 auto;
    }

    .form-header-bar {
        padding: 18px 24px;
        background: #FAFBFD;
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .form-header-bar h4 {
        font-size: 15px;
        font-weight: 800;
        color: var(--admin-navy);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .form-body-content {
        padding: 26px;
    }

    .form-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group-item {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-label-item {
        font-size: 13px;
        font-weight: 700;
        color: var(--admin-navy);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .form-input-item {
        padding: 10px 14px;
        border: 1px solid var(--admin-border);
        border-radius: 10px;
        font-size: 13.5px;
        outline: none;
        transition: border-color 0.2s;
        width: 100%;
        box-sizing: border-box;
    }

    .form-input-item:focus {
        border-color: var(--admin-orange);
    }

    .form-actions-footer {
        padding: 18px 26px;
        background: #FAFBFD;
        border-top: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 12px;
    }
</style>
@endsection

@section('content')
<div style="padding-bottom: 30px;">
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
        <a href="{{ route('admin.faqs.index') }}" class="btn-admin btn-secondary">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to FAQs</span>
        </a>
    </div>

    <div class="form-card">
        <div class="form-header-bar">
            <h4>
                <i class="fa-solid fa-circle-question" style="color: var(--admin-orange);"></i>
                <span>Add Frequently Asked Question</span>
            </h4>
            <span style="font-size: 12px; color: #64748B;">Appears in Section 9 accordion</span>
        </div>

        <form action="{{ route('admin.faqs.store') }}" method="POST">
            @csrf

            <div class="form-body-content">
                <div class="form-group-item" style="margin-bottom: 20px;">
                    <label class="form-label-item">
                        <span>Question</span>
                        <span style="color: #EF4444;">*</span>
                    </label>
                    <input type="text" name="question" class="form-input-item" value="{{ old('question') }}" required placeholder="e.g. What curriculum does Advaita follow?" maxlength="255">
                    @error('question')
                        <span style="font-size: 11.5px; color: #EF4444;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group-item" style="margin-bottom: 20px;">
                    <label class="form-label-item">
                        <span>Answer</span>
                        <span style="color: #EF4444;">*</span>
                    </label>
                    <textarea name="answer" rows="5" class="form-input-item" required placeholder="Detailed clear response for parents and students...">{{ old('answer') }}</textarea>
                    @error('answer')
                        <span style="font-size: 11.5px; color: #EF4444;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Display Sort Order</span>
                            <span style="color: #EF4444;">*</span>
                        </label>
                        <input type="number" name="order" class="form-input-item" value="{{ old('order', $nextOrder) }}" min="0" required>
                    </div>

                    <div class="form-group-item" style="justify-content: center;">
                        <label class="form-label-item">
                            <span>Active Visibility Status</span>
                        </label>
                        <div style="display: flex; align-items: center; gap: 10px; margin-top: 6px;">
                            <input type="checkbox" name="is_active" value="1" id="isActiveCheck" {{ old('is_active', true) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--admin-orange);">
                            <label for="isActiveCheck" style="font-size: 13.5px; font-weight: 600; color: var(--admin-navy); cursor: pointer;">
                                Visible on public homepage
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions-footer">
                <a href="{{ route('admin.faqs.index') }}" class="btn-admin btn-secondary">Cancel</a>
                <button type="submit" class="btn-admin btn-primary">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Question</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
