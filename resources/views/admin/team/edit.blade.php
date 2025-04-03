@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit Team Member</h2>

    <form action="{{ route('admin.team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $team->name) }}" required>
        </div>

        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" name="designation" id="designation" class="form-control" value="{{ old('designation', $team->designation) }}" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($team->image)
                <img src="{{ asset('storage/' . $team->image) }}" alt="team-image" class="img-fluid mt-2" style="max-width: 200px;">
            @endif
        </div>

        <div class="form-group">
            <label for="facebook">Facebook Link</label>
            <input type="url" name="facebook" id="facebook" class="form-control" value="{{ old('facebook', $team->facebook) }}">
        </div>

        <div class="form-group">
            <label for="twitter">Twitter Link</label>
            <input type="url" name="twitter" id="twitter" class="form-control" value="{{ old('twitter', $team->twitter) }}">
        </div>

        <div class="form-group">
            <label for="linkedin">LinkedIn Link</label>
            <input type="url" name="linkedin" id="linkedin" class="form-control" value="{{ old('linkedin', $team->linkedin) }}">
        </div>

        <div class="form-group">
            <label for="instagram">Instagram Link</label>
            <input type="url" name="instagram" id="instagram" class="form-control" value="{{ old('instagram', $team->instagram) }}">
        </div>

        <div class="form-group">
            <label for="youtube">YouTube Link</label>
            <input type="url" name="youtube" id="youtube" class="form-control" value="{{ old('youtube', $team->youtube) }}">
        </div>

        <button type="submit" class="btn btn-warning">Update Team Member</button>
    </form>
</div>
@endsection
