@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Clients</h2>
    <a href="{{ route('admin.clients.create') }}" class="btn btn-primary">Add New Client</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Testimonial</th>
                <th>Image</th> <!-- Added the Image Column -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->position }}</td>
                    <td>{{ $client->testimonial }}</td>
                    <td>
                        <!-- Display the client's image -->
                        <img src="{{ asset('images/clients/'.$client->image) }}" alt="{{ $client->name }}" width="50" height="50">
                    </td>
                    <td>
                        <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
