@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Add New Team Member</h2>
    <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" name="designation" class="form-control" id="designation" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image" required>
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" name="facebook" class="form-control" id="facebook">
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" name="twitter" class="form-control" id="twitter">
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn</label>
            <input type="text" name="linkedin" class="form-control" id="linkedin">
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" name="instagram" class="form-control" id="instagram">
        </div>
        <div class="form-group">
            <label for="youtube">YouTube</label>
            <input type="text" name="youtube" class="form-control" id="youtube">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
