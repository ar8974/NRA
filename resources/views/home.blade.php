@extends('layouts.app')

@section('content')

    {{-- HERO SECTION --}}
    <section class="relative h-[70vh] w-full">
        <img
            src="https://picsum.photos/1920/1080"
            class="absolute inset-0 w-full h-full object-cover opacity-60"
        >

        <div class="absolute bottom-20 left-10 max-w-xl">
            <h1 class="text-5xl font-bold">Featured Movie</h1>
            <p class="mt-4 text-lg text-gray-300">
                A beautiful hero section description goes here.
            </p>

            <button class="mt-6 bg-red-600 px-6 py-2 rounded text-lg">
                Play
            </button>
        </div>
    </section>

    {{-- ROWS --}}
    <section class="mt-10 px-6">
        <h2 class="text-2xl font-semibold mb-4">Trending Now</h2>

        <div class="flex gap-4 overflow-x-auto">
            @for ($i = 0; $i < 10; $i++)
                <div class="w-40 h-60 bg-gray-700 rounded"></div>
            @endfor
        </div>
    </section>

@endsection
