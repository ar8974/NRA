@extends('layouts.user')

@section('content')
{{-- CORRECTED: Header uses static text and NO $genre variable --}}
<h1 class="h2 text-info mb-4">Browse Genres</h1>

{{-- Converted to Bootstrap row-cols grid (3 columns on medium screens and up) --}}
<div class="row row-cols-1 row-cols-md-3 g-4">
    @forelse($genres as $genre)
    <div class="col">
        {{-- Card: bg-dark for the dark theme, text-light, and border-info for the accent --}}
        <div class="card h-100 bg-dark text-light border-info shadow-lg">
            
            <div class="card-body">
                {{-- Genre Name is displayed using the loop variable --}}
                <h5 class="card-title text-light mb-3">{{ $genre }}</h5>
                
                <p class="card-text text-secondary small mb-3">Browse web series in this category.</p>
                
                <a href="{{ route('user.countries.show', $genre) }}"
                   class="btn btn-info btn-sm">
                   View Shows
                </a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <p class="text-center text-secondary">No genres available.</p>
    </div>
    @endforelse
</div>
@endsection