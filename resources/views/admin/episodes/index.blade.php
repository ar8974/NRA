@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Episodes</h1>
    <a href="{{ route('admin.episodes.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">Add Episode</a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="min-w-full bg-white shadow rounded">
    <thead>
        <tr class="border-b">
            <th class="p-3 text-left">ID</th>
            <th class="p-3 text-left">Name</th>
            <th class="p-3 text-left">Series</th>
            <th class="p-3 text-left">Number</th>
            <th class="p-3 text-left">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($episodes as $ep)
        <tr class="border-b hover:bg-gray-50">
            <td class="p-3">{{ $ep->Ep_ID }}</td>
            <td class="p-3">{{ $ep->Title }}</td>
            <td class="p-3">{{ $ep->webseries->Name ?? 'N/A' }}</td>
            <td class="p-3">{{ $ep->Ep_No }}</td>
            <td class="p-3 flex gap-2">
                <a href="{{ route('admin.episodes.show', $ep) }}" class="text-blue-600">View</a>
                <a href="{{ route('admin.episodes.edit', $ep) }}" class="text-yellow-600">Edit</a>
                <form action="{{ route('admin.episodes.destroy', $ep) }}" method="POST"
                      onsubmit="return confirm('Delete this episode?')">
                    @csrf @method('DELETE')
                    <button class="text-red-600">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $episodes->links() }}
</div>
@endsection
