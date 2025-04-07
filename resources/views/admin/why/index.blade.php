@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Manage Why Section</h2>
    <a href="{{ route('admin.why.create') }}" class="btn btn-primary">Add New</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($whySections as $section)
            <tr>
                <td>{{ $section->id }}</td>
                <td>{{ $section->title }}</td>
                <td>{{ $section->description }}</td>
                <td><img src="{{ asset('./assets/storage/' . $section->image) }}" width="80"></td>
                <td>
                    <a href="{{ route('admin.why.edit', $section->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.why.destroy', $section->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
