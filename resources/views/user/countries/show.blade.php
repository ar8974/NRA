@extends('layouts.user')

@section('content')
<h1 class="text-2xl font-bold mb-4">Shows in {{ $genre }}</h1>

<div class="grid grid-cols-3 gap-4">
    @forelse($shows as $show)
        <div class="bg-gray-800 p-4 rounded shadow">
            <h2 class="text-xl font-semibold mb-2">{{ $show->Name }}</h2>
            <p class="text-gray-300 mb-2">Release: {{ $show->Release }}</p>
            <p class="text-gray-400 mb-2">Country: {{ $show->Country }}</p>
            <a href="{{ route('user.shows.show', $show->Series_ID) }}"
               class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 inline-block">
               View Episodes
            </a>
        </div>
    @empty
        <p class="text-gray-400 col-span-3">No shows in this genre.</p>
    @endforelse
</div>

<div class="mt-6">
    {{ $shows->links() }}
</div>
@endsection
