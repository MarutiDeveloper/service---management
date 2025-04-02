<!-- resources/views/admin/company-profile/index.blade.php -->
@extends('admin.layouts.app')

@section('content')
    <h1>Company Profile</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.company-profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <!-- Left side (Company Name) -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" name="company_name" class="form-control" value="{{ old('company_name', $companyProfile->company_name ?? '') }}" required>
                </div>
            </div>

            <!-- Right side (Company Tagline) -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="company_tagline">Company Tagline</label>
                    <input type="text" name="company_tagline" class="form-control" value="{{ old('company_tagline', $companyProfile->company_tagline ?? '') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Left side (Company Logo) -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="company_logo">Company Logo</label>
                    <input type="file" name="company_logo" class="form-control">
                    @if(isset($companyProfile->company_logo) && $companyProfile->company_logo)
                        <img src="{{ asset('storage/' . $companyProfile->company_logos) }}" width="100" alt="Company Logo">
                    @endif
                </div>
            </div>

            <!-- Right side (Website URL) -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="website_url">Website URL</label>
                    <input type="url" name="website_url" class="form-control" value="{{ old('website_url', $companyProfile->website_url ?? '') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Left side (Industry Type) -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="industry_type">Industry Type</label>
                    <input type="text" name="industry_type" class="form-control" value="{{ old('industry_type', $companyProfile->industry_type ?? '') }}">
                </div>
            </div>

            <!-- Right side (Phone Number) -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $companyProfile->phone_number ?? '') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Left side (Company Description) -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="company_description">Company Description</label>
                    <textarea name="company_description" class="form-control">{{ old('company_description', $companyProfile->company_description ?? '') }}</textarea>
                </div>
            </div>

            <!-- Right side (Email Address) -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email_address">Email Address</label>
                    <input type="email" name="email_address" class="form-control" value="{{ old('email_address', $companyProfile->email_address ?? '') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Left side (Fax Number) -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fax_number">Fax Number</label>
                    <input type="text" name="fax_number" class="form-control" value="{{ old('fax_number', $companyProfile->fax_number ?? '') }}">
                </div>
            </div>

            <!-- Right side (Office Address) -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="office_address">Office Address</label>
                    <input type="text" name="office_address" class="form-control" value="{{ old('office_address', $companyProfile->office_address ?? '') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Left side (Social Media Links) -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="social_media_links">Social Media Links</label>
                    <input type="text" name="social_media_links" class="form-control" value="{{ old('social_media_links', $companyProfile->social_media_links ?? '') }}">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
@endsection
