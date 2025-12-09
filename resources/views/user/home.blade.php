@extends('layouts.user')

@section('content')

    {{-- IMPROVED HERO SECTION: High impact, full height (70vh), and a clear call to action --}}
    <section class="relative h-[70vh] w-full">
        {{-- Image with opacity for better text readability --}}
        <img
            src="https://picsum.photos/1920/1080?random=1"
            class="absolute inset-0 w-full h-full object-cover opacity-60"
        >

        {{-- Content positioned at the bottom-left --}}
        <div class="absolute bottom-20 left-10 max-w-xl">
            <h1 class="text-5xl font-bold">{{ $featured->Name ?? 'Featured Series' }}</h1>
            <p class="mt-4 text-lg text-gray-300">
                Release: {{ optional($featured)->Release }}
            </p>

            {{-- Prominent red "Play" button style --}}
            <a href="{{ route('series.show', optional($featured)->Series_ID) }}" class="mt-6 bg-red-600 px-6 py-2 rounded text-lg inline-block hover:bg-red-700 transition">
                View Series
            </a>
        </div>
    </section>

    {{-- IMPROVED LATEST SERIES ROW: Uses horizontal scrolling for content browsing --}}
    <section class="mt-10">
        <h2 class="text-2xl font-semibold mb-4">Latest</h2>

        {{-- Horizontal scroll container (flex gap-4 overflow-x-auto) --}}
        <div class="flex gap-4 overflow-x-auto pb-4">
            @foreach($rows as $r)
                {{-- Use flex-shrink-0 and fixed width (w-48) to enforce horizontal scrolling --}}
                <a href="{{ route('series.show', $r->Series_ID) }}"
                   class="flex-shrink-0 w-48 block bg-gray-800 rounded overflow-hidden hover:scale-[1.02] transition-transform duration-200">
                    
                    {{-- Placeholder for Poster/Thumbnail --}}
                    <div class="w-full h-64 bg-gray-700 flex items-center justify-center text-center p-2">
                         <span class="text-sm text-gray-400">{{ $r->Name }} Poster</span>
                    </div>
                    
                    <div class="p-3">
                        <div class="text-md font-semibold truncate">{{ $r->Name }}</div>
                        <div class="text-xs text-gray-400">{{ $r->Country }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

@endsection