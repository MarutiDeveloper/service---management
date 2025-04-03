@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit Client</h2>

    <!-- Display validation errors if any -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Client Form -->
    <form action="{{ route('admin.clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')  <!-- Specify PUT method for update -->

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $client->name) }}" required>
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" id="position" class="form-control" value="{{ old('position', $client->position) }}" required>
        </div>

        <div class="form-group">
            <label for="testimonial">Testimonial</label>
            <textarea name="testimonial" id="testimonial" class="form-control" rows="5" required>{{ old('testimonial', $client->testimonial) }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <div>
                <!-- Display existing image -->
                @if ($client->image)
                    <img src="{{ asset('images/clients/'.$client->image) }}" alt="{{ $client->name }}" width="100" height="100">
                    <br>
                    <small>Current Image</small>
                @endif
            </div>
            <input type="file" name="image" id="image" class="form-control">
            <small>Leave the image field blank if you don't want to change the image.</small>
        </div>

        <button type="submit" class="btn btn-success">Update Client</button>
    </form>
</div>
@endsection
