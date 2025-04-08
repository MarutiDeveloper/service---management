@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>About Us</h2>
            <a href="{{ route('admin.about.create') }}" class="btn btn-primary">Add New About</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th width="120">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($aboutus as $about)
                    <tr>
                        <td>{{ $about->title }}</td>
                        <td>{{ Str::limit($about->description, 100) }}</td>
                        <td>
                            @if($about->image)
                                <img src="{{ asset($about->image) }}" alt="About Image" class="rounded-circle shadow"
                                    style="width: 80px; height: 80px; object-fit: cover;">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>

                            <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this About section?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No About Us entries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
