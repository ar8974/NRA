@extends('layouts.user')

@section('content')
<h1 class="text-2xl font-bold mb-4">Genres</h1>

<div class="grid grid-cols-3 gap-4">
    @forelse($genres as $genre)
        <div class="bg-gray-800 p-4 rounded shadow">
            <h2 class="text-xl font-semibold">{{ $genre }}</h2>
            <a href="{{ route('user.countries.show', $genre) }}"
               class="mt-2 inline-block bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
               View Shows
            </a>
        </div>
    @empty
        <p class="text-gray-400">No genres available.</p>
    @endforelse
</div>
@endsection
