@extends('layouts.admin')
@section('content')
<h1 class="text-2xl font-bold mb-4">Producers</h1>

<a href="{{ route('admin.producers.create') }}" class="bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">Add Producer</a>

<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr class="bg-gray-100">
            <th class="border px-2 py-1">ID</th>
            <th class="border px-2 py-1">Name</th>
            <th class="border px-2 py-1">Email</th>
            <th class="border px-2 py-1">Country</th>
            <th class="border px-2 py-1">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($producers as $producer)
        <tr>
            <td class="border px-2 py-1">{{ $producer->Prod_ID }}</td>
            <td class="border px-2 py-1">{{ $producer->F_Name }} {{ $producer->L_Name }}</td>
            <td class="border px-2 py-1">{{ $producer->Email }}</td>
            <td class="border px-2 py-1">{{ $producer->country->Country ?? '-' }}</td>
            <td class="border px-2 py-1 space-x-1">
                <a href="{{ route('admin.producers.show', $producer->Prod_ID) }}" class="text-blue-600">View</a>
                <a href="{{ route('admin.producers.edit', $producer->Prod_ID) }}" class="text-yellow-600">Edit</a>
                <form method="POST" action="{{ route('admin.producers.destroy', $producer->Prod_ID) }}" class="inline">
                    @csrf @method('DELETE')
                    <button class="text-red-600" onclick="return confirm('Delete this producer?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $producers->links() }}
</div>
@endsection
