@extends('admin.layouts.app')

@section('content')
    <h1>Edit Service</h1>

    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Service Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Service Description</label>
            <textarea name="description" class="form-control" required>{{ old('description', $service->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Service Image</label>
            <input type="file" name="image" class="form-control">
            @if($service->image)
                <img src="{{ asset('./assets/storage/' . $service->image) }}" width="100" alt="Service Image">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Service</button>
    </form>
@endsection
