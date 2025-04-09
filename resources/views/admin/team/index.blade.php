@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-end mb-3">
            <div class="col-md-3 text-end">
                <h2 class="mb-2">Manage Team</h2>
                <a href="{{ route('admin.team.create') }}" class="btn btn-primary">Add New Team</a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($teams as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->designation }}</td>
                            <td>
                                @if($team->image)
                                    <img src="{{ asset($team->image) }}" alt="Team Image"
                                        class="rounded-circle img-thumbnail shadow-sm"
                                        style="width: 80px; height: 80px; object-fit: cover;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.team.edit', $team->id) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.team.destroy', $team->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this team member?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted">No team members found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection