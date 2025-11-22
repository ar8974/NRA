@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Production Houses</h1>
    <a href="{{ route('admin.prodhouses.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
        Add Producer
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="min-w-full bg-white shadow rounded">
    <thead>
        <tr class="border-b">
            <th class="p-2 border">House ID</th>
            <th class="p-2 border">Name</th>
            <th class="p-2 border">Year Est</th>
            <th class="p-2 border">City</th>
            <th class="p-2 border">Country_Code</th>
            <th class="p-2 border">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($prodhouses as $producer)
        <tr class="hover:bg-gray-50">
            <td class="p-2 border">{{ $producer->House_ID }}</td>
            <td class="p-2 border">{{ $producer->Name }}</td>
            <td class="p-2 border">{{ $producer->Year_Est }}</td>
            <td class="p-2 border">{{ $producer->City }}</td>
            <td class="p-2 border">{{ $producer->Country_Code }}</td>
            <td class="p-2 border flex gap-2">
                <a href="{{ route('admin.prodhouses.edit', $producer->House_ID) }}" 
                    class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">
                        Edit
                </a>
                <a href="{{ route('admin.prodhouses.show', $producer->House_ID) }}" 
                    class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                        View
                </a>
                <form action="{{ route('admin.prodhouses.destroy', $producer->House_ID) }}" method="POST" onsubmit="return confirm('Delete this record?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                            Delete
                        </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="p-2 text-center text-gray-500">No producers found.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-4">
    {{ $prodhouses->links() }}
</div>
@endsection
