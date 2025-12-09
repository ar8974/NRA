@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4 mb-0">Producers</h1>
    <a href="{{ route('admin.producers.create') }}" class="btn btn-success">Add Producer</a>
</div>

<div class="table-responsive bg-white shadow rounded">
    <table class="table table-striped table-bordered mb-0">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($producers as $producer)
            <tr>
                <td>{{ $producer->Prod_ID }}</td>
                <td>{{ $producer->F_Name }} {{ $producer->L_Name }}</td>
                <td>{{ $producer->Email }}</td>
                <td>{{ $producer->country->Country ?? '-' }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.producers.show', $producer->Prod_ID) }}" class="btn btn-sm btn-outline-primary">View</a>
                    <a href="{{ route('admin.producers.edit', $producer->Prod_ID) }}" class="btn btn-sm btn-warning text-white">Edit</a>

                    <form method="POST" action="{{ route('admin.producers.destroy', $producer->Prod_ID) }}" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this producer?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="p-3">
        {{ $producers->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
