@extends('layouts.user')

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ $show->Name }}</h1>
<p class="text-gray-300 mb-2">Release: {{ $show->Release }}</p>
<p class="text-gray-400 mb-4">Country: {{ $show->Country }}</p>

<h2 class="text-xl font-semibold mb-2">Episodes</h2>
@if($episodes->count())
<ul class="list-disc pl-6 space-y-1">
    @foreach($episodes as $ep)
    <li>{{ $ep->Ep_No }}. {{ $ep->Title }}</li>
    @endforeach
</ul>
@else
<p class="text-gray-400">No episodes available.</p>
@endif

<a href="{{ route('user.shows.index') }}" class="mt-4 inline-block text-blue-500 hover:underline">Back to Shows</a>
@endsection
