@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4 mb-0">Production Houses</h1>

    <a href="{{ route('admin.prodhouses.create') }}" class="btn btn-primary">Add Production House</a>
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
                <th>Year Est</th>
                <th>City</th>
                <th>Country Code</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodhouses as $producer)
            <tr>
                <td>{{ $producer->House_ID }}</td>
                <td>{{ $producer->Name }}</td>
                <td>{{ $producer->Year_Est }}</td>
                <td>{{ $producer->City }}</td>
                <td>{{ $producer->Country_Code }}</td>
                <td class="text-nowrap">
                    <a href="{{ route('admin.prodhouses.show', $producer->House_ID) }}" class="btn btn-sm btn-outline-primary">View</a>
                    <a href="{{ route('admin.prodhouses.edit', $producer->House_ID) }}" class="btn btn-sm btn-warning text-white">Edit</a>

                    <form action="{{ route('admin.prodhouses.destroy', $producer->House_ID) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete this record?');">
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
    {{ $prodhouses->links('pagination::bootstrap-5') }}
 </div>

@endsection
