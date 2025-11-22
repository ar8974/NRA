@extends('layouts.user')
@section('content')
  <div class="mb-6">
    <div class="relative h-72 rounded overflow-hidden">
      <img src="https://picsum.photos/1200/400?random=1" class="w-full h-full object-cover opacity-80" />
      <div class="absolute left-8 bottom-8">
        <h2 class="text-4xl font-bold">{{ $featured->Name ?? 'Featured' }}</h2>
        <p class="mt-2 text-gray-200">Release: {{ optional($featured)->Release }}</p>
      </div>
    </div>
  </div>

  <div>
    <h3 class="text-2xl font-semibold mb-4">Latest</h3>
    <div class="grid grid-cols-5 gap-4">
      @foreach($rows as $r)
        <a href="{{ route('series.show', $r->Series_ID) }}" class="block bg-black/60 rounded overflow-hidden">
          <div class="h-40 bg-gray-700 flex items-center justify-center">{{ $r->Name }}</div>
          <div class="p-2">
            <div class="text-sm">{{ $r->Name }}</div>
            <div class="text-xs text-gray-400">{{ $r->Country }}</div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endsection
