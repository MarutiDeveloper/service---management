@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit Why Section</h2>
    <form action="{{ route('admin.why.update', $whySection->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $whySection->title }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required>{{ $whySection->description }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Current Image</label><br>
            <img src="{{ asset('./assets/storage/' . $whySection->image) }}" width="100">
        </div>
        <div class="mb-3">
            <label class="form-label">New Image (optional)</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
