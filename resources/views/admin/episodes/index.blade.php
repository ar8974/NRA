@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4 mb-0">Episodes</h1>

    <a href="{{ route('admin.episodes.create') }}" class="btn btn-primary">Add Episode</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Series</th>
                <th>Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($episodes as $ep)
            <tr>
                <td>{{ $ep->Ep_ID }}</td>
                <td>{{ $ep->Title }}</td>
                <td>{{ $ep->webseries->Name ?? 'N/A' }}</td>
                <td>{{ $ep->Ep_No }}</td>
                <td class="text-nowrap">
                    <a href="{{ route('admin.episodes.show', $ep) }}" class="btn btn-sm btn-outline-primary">View</a>
                    <a href="{{ route('admin.episodes.edit', $ep) }}" class="btn btn-sm btn-warning text-white">Edit</a>

                    <form action="{{ route('admin.episodes.destroy', $ep) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete this episode?')">
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
    {{ $episodes->links('pagination::bootstrap-5') }}
</div>

@endsection
