@extends('layouts.admin')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Contracts</h1>
        <a href="{{ route('admin.contracts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Contract</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
    @endif

    <table class="min-w-full bg-white shadow rounded">
       <thead>
    <tr class="bg-gray-100 text-left">
        <th class="p-2 border">ID</th>
        <th class="p-2 border">Series</th>
        <th class="p-2 border">Start Date</th>
        <th class="p-2 border">End Date</th>
        <th class="p-2 border">Charge per Episode</th>
        <th class="p-2 border">Actions</th>
    </tr>
    </thead>
    <tbody>
        @foreach($contracts as $contract)
        <tr>
            <td class="p-2 border">{{ $contract->Contract_ID }}</td>
            <td class="p-2 border">{{ $contract->webseries->Name ?? 'N/A' }}</td>
            <td class="p-2 border">{{ $contract->Contract_date }}</td>
            <td class="p-2 border">{{ $contract->Contract_end }}</td>
            <td class="p-2 border">{{ $contract->Charge_per_ep }}</td>
            <td class="p-2 border flex gap-2">
                <a href="{{ route('admin.contracts.show', $contract) }}" class="text-blue-600">View</a>
                <a href="{{ route('admin.contracts.edit', $contract) }}" class="text-yellow-600">Edit</a>
                <form action="{{ route('admin.contracts.destroy', $contract) }}" method="POST" onsubmit="return confirm('Delete this contract?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>

    <div class="mt-4">
        {{ $contracts->links() }}
    </div>
</div>
@endsection
