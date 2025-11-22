@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Subtitles</h1>
    <a href="{{ route('admin.subs.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">Add Subtitle</a>
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
            <th class="p-3 text-left">Language</th>
            <th class="p-3 text-left">Type</th>
            <th class="p-3 text-left">Episode</th>
            <th class="p-3 text-left">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($subs as $sub)
        <tr class="border-b hover:bg-gray-50">
            <td class="p-3">{{ $sub->Sub_ID }}</td>
            <td class="p-3">{{ $sub->Language }}</td>
            <td class="p-3">{{ $sub->Type }}</td>
            <td class="p-3">{{ $sub->episode->Episode_Name }}</td>

            <td class="p-3 flex gap-2">
                <a href="{{ route('admin.subs.show', $sub) }}" class="text-blue-600">View</a>
                <a href="{{ route('admin.subs.edit', $sub) }}" class="text-yellow-600">Edit</a>
                <form action="{{ route('admin.subs.destroy', $sub) }}"
                      method="POST" onsubmit="return confirm('Delete subtitle?')">
                    @csrf @method('DELETE')
                    <button class="text-red-600">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $subs->links() }}
</div>
@endsection
