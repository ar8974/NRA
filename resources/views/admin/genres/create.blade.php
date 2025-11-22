@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Add Genre</h1>

<form method="POST" action="{{ route('admin.genres.store') }}" class="space-y-4">
    @csrf

    <div>
        <label class="block font-semibold">Genre ID</label>
        <input type="number" name="Genre_ID" class="w-full border p-2 rounded">
    </div>

    <div>
        <label class="block font-semibold">Genre Name</label>
        <input type="text" name="Name" class="w-full border p-2 rounded">
    </div>

    <button class="bg-green-600 text-white px-4 py-2 rounded">Save</button>
</form>
@endsection
