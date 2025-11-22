@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Genre Details</h1>

<div class="bg-white shadow p-6 rounded space-y-3">
    <p><strong>ID:</strong> {{ $genre->Genre_ID }}</p>
    <p><strong>Genre Name:</strong> {{ $genre->Name }}</p>
</div>

<a href="{{ route('admin.genres.index') }}" class="text-blue-600 mt-4 inline-block">Back</a>
@endsection
