@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Add Client</h2>
    <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" id="position" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="testimonial">Testimonial</label>
            <textarea name="testimonial" id="testimonial" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save Client</button>
    </form>
</div>
@endsection
