@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Genre</h1>

<form method="POST" action="{{ route('admin.genres.update', $genre) }}" class="space-y-4">
    @csrf @method('PUT')

    <div>
        <label class="block font-semibold">Genre ID</label>
        <input type="number" value="{{ $genre->Genre_ID }}" disabled class="w-full border p-2 rounded bg-gray-100">
    </div>

    <div>
        <label class="block font-semibold">Genre Name</label>
        <input type="text" name="Name" value="{{ $genre->Name }}" class="w-full border p-2 rounded">
    </div>

    <button class="bg-yellow-600 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
