@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Genres</h1>

    <a href="{{ route('admin.genres.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">Add Genre</a>
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
            <th class="p-3 text-left">Genre Name</th>
            <th class="p-3 text-left">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($genres as $genre)
        <tr class="border-b hover:bg-gray-50">
            <td class="p-3">{{ $genre->Genre_ID }}</td>
            <td class="p-3">{{ $genre->Name }}</td>

            <td class="p-3 flex gap-3">
                <a href="{{ route('admin.genres.show', $genre) }}" class="text-blue-600">View</a>
                <a href="{{ route('admin.genres.edit', $genre) }}" class="text-yellow-600">Edit</a>

                <form action="{{ route('admin.genres.destroy', $genre) }}" 
                      method="POST" onsubmit="return confirm('Delete genre?')">
                    @csrf @method('DELETE')
                    <button class="text-red-600">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $genres->links() }}
</div>

@endsection
