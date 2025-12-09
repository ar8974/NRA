@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4 mb-0">Genres</h1>

    <a href="{{ route('admin.genres.create') }}" class="btn btn-primary">Add Genre</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Genre Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
            <tr>
                <td>{{ $genre->Genre_ID }}</td>
                <td>{{ $genre->Name }}</td>
                <td class="text-nowrap">
                    <a href="{{ route('admin.genres.show', $genre) }}" class="btn btn-sm btn-outline-primary">View</a>
                    <a href="{{ route('admin.genres.edit', $genre) }}" class="btn btn-sm btn-warning text-white">Edit</a>

                    <form action="{{ route('admin.genres.destroy', $genre) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete genre?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $genres->links('pagination::bootstrap-5') }}
 </div>

@endsection
