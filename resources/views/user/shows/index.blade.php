@extends('layouts.user')

@section('content')
<h1 class="text-2xl font-bold mb-4">All Shows</h1>

<div class="grid grid-cols-3 gap-4">
    @forelse($shows as $show)
    <div class="bg-gray-800 p-4 rounded shadow">
        <h2 class="text-xl font-semibold mb-1">{{ $show->Name }}</h2>
        <p class="text-gray-300 mb-1">Release: {{ $show->Release }}</p>
        <p class="text-gray-400 mb-1">Country: {{ $show->Country }}</p>
        <p class="text-gray-400 mb-2">Episodes: {{ $show->total_episodes }}</p>
        <a href="{{ route('user.shows.show', $show->Series_ID) }}"
           class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 inline-block">
           View Episodes
        </a>
    </div>
    @empty
    <p class="col-span-3 text-center text-gray-400">No shows available.</p>
    @endforelse
</div>

<div class="mt-6">
    {{ $shows->links() }}
</div>
@endsection
