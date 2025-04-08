@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Manage Team</h2>
    <a href="{{ route('admin.team.create') }}" class="btn btn-primary">Add New Team Member</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->designation }}</td>
                    <td>
                        @if($team->image)
                            <img src="{{ asset($team->image) }}" alt="Team Image"
                                class="rounded-circle mx-auto shadow" style="max-width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.team.edit', $team->id) }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-pencil-alt"></i>
                        </a>

                        <form action="{{ route('admin.team.destroy', $team->id) }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Are you sure you want to delete this team member?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
