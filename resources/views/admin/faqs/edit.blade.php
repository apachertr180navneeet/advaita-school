@extends('layouts.admin')

@section('title', 'Edit FAQ Question')
@section('page_title', 'Edit FAQ Question')



@section('content')
<div class="pb-30">
    <div class="d-flex align-items-center justify-content-between mb-20">
        <a href="{{ route('admin.faqs.index') }}" class="btn-admin btn-secondary">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to FAQs</span>
        </a>
    </div>

    <div class="form-card">
        <div class="form-header-bar">
            <h4>
                <i class="fa-solid fa-pen-to-square text-orange"></i>
                <span>Edit FAQ Question #{{ $faq->id }}</span>
            </h4>
            <span class="text-muted fs-12">Updates dynamically on homepage</span>
        </div>

        <form action="{{ route('admin.faqs.update', $faq->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-body-content">
                <div class="form-group-item mb-20">
                    <label class="form-label-item">
                        <span>Question</span>
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="question" class="form-input-item" value="{{ old('question', $faq->question) }}" required placeholder="e.g. What curriculum does Advaita follow?" maxlength="255">
                    @error('question')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group-item mb-20">
                    <label class="form-label-item">
                        <span>Answer</span>
                        <span class="text-danger">*</span>
                    </label>
                    <textarea name="answer" rows="5" class="form-input-item" required placeholder="Detailed clear response for parents and students...">{{ old('answer', $faq->answer) }}</textarea>
                    @error('answer')
                        <span class="form-error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grid-2">
                    <div class="form-group-item">
                        <label class="form-label-item">
                            <span>Display Sort Order</span>
                            <span class="text-danger">*</span>
                        </label>
                        <input type="number" name="order" class="form-input-item" value="{{ old('order', $faq->order) }}" min="0" required>
                    </div>

                    <div class="form-group-item justify-content-center">
                        <label class="form-label-item">
                            <span>Active Visibility Status</span>
                        </label>
                        <div class="d-flex align-items-center gap-10 mt-6">
                            <input type="checkbox" name="is_active" value="1" id="isActiveCheck" {{ old('is_active', $faq->is_active) ? 'checked' : '' }} class="checkbox-orange">
                            <label for="isActiveCheck" class="text-navy font-semibold cursor-pointer fs-13">
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
                    <span>Save Changes</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
