@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4 mb-0">Viewers</h1>

    <a href="{{ route('admin.viewers.create') }}" class="btn btn-primary">Add Viewer</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Street</th>
                <th>City</th>
                <th>ZIP</th>
                <th>Account Date</th>
                <th>Monthly Charge</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($viewers as $viewer)
            <tr>
                <td>{{ $viewer->View_ID }}</td>
                <td>{{ $viewer->F_Name }}</td>
                <td>{{ $viewer->L_Name }}</td>
                <td>{{ $viewer->Street }}</td>
                <td>{{ $viewer->City }}</td>
                <td>{{ $viewer->ZIP }}</td>
                <td>{{ $viewer->Acc_date }}</td>
                <td>${{ number_format($viewer->Monthly_Charge, 2) }}</td>
                <td>{{ $viewer->country->Country ?? 'N/A' }}</td>
                <td class="text-nowrap">
                    <a href="{{ route('admin.viewers.show', $viewer->View_ID) }}" class="btn btn-sm btn-outline-primary">View</a>
                    <a href="{{ route('admin.viewers.edit', $viewer->View_ID) }}" class="btn btn-sm btn-warning text-white">Edit</a>

                    <form action="{{ route('admin.viewers.destroy', $viewer->View_ID) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete this viewer?')">
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
    {{ $viewers->links('pagination::bootstrap-5') }}
</div>

@endsection
