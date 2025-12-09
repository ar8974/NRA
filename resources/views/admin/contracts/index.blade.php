@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4 mb-0">Contracts</h1>

    <a href="{{ route('admin.contracts.create') }}" class="btn btn-primary">Add Contract</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Series</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Charge per Episode</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contracts as $contract)
            <tr>
                <td>{{ $contract->Contract_ID }}</td>
                <td>{{ $contract->webseries->Name ?? 'N/A' }}</td>
                <td>{{ $contract->Contract_date }}</td>
                <td>{{ $contract->Contract_end }}</td>
                <td>{{ $contract->Charge_per_ep }}</td>
                <td class="text-nowrap">
                    <a href="{{ route('admin.contracts.show', $contract) }}" class="btn btn-sm btn-outline-primary">View</a>
                    <a href="{{ route('admin.contracts.edit', $contract) }}" class="btn btn-sm btn-warning text-white">Edit</a>

                    <form action="{{ route('admin.contracts.destroy', $contract) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete this contract?')">
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
    {{ $contracts->links('pagination::bootstrap-5') }}
</div>

@endsection
