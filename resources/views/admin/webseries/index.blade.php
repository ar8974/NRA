@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4 mb-0">Web Series</h1>

    <a href="{{ route('admin.webseries.create') }}" class="btn btn-primary">Add Web Series</a>
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
                <th>Genre</th>
                <th>Production House</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($webseries as $w)
            <tr>
                <td>{{ $w->Series_ID }}</td>
                <td>{{ $w->Name }}</td>
                <td>
                    @if($w->genres->isNotEmpty())
                        @foreach($w->genres as $g)
                            <span class="badge bg-light text-dark border me-1">{{ $g->Name }}</span>
                        @endforeach
                    @else
                        <span class="text-muted">—</span>
                    @endif
                </td>
                <td>{{ $w->prodhouse->Name ?? 'N/A' }}</td>
                <td class="text-nowrap">
                    <a href="{{ route('admin.webseries.show', $w->Series_ID) }}" class="btn btn-sm btn-outline-primary">View</a>
                    <a href="{{ route('admin.webseries.edit', $w->Series_ID) }}" class="btn btn-sm btn-warning text-white">Edit</a>

                    <form action="{{ route('admin.webseries.destroy', $w->Series_ID) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete this record?');">
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
    {{ $webseries->links('pagination::bootstrap-5') }}
</div>

@endsection
