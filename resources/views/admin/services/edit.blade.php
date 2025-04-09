@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center mb-4">Edit Service</h2>

        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow-sm bg-white">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="title" class="form-label">Service Title</label>
                <input type="text" name="title" id="title" class="form-control"
                       value="{{ old('title', $service->title) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label">Service Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $service->description) }}</textarea>
            </div>

            <div class="form-group mb-4">
                <label for="image" class="form-label">Service Image</label>
                <input type="file" name="image" id="image" class="form-control">

                @if($service->image)
                    <div class="mt-3">
                        <img src="{{ asset($service->image) }}" alt="Service Image"
                             class="img-thumbnail d-block mx-auto" style="max-width: 120px; height: auto;">
                    </div>
                @endif
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update Service</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </form>
    </div>
@endsection
