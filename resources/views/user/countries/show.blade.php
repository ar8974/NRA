@extends('layouts.user')

@section('content')
{{-- Heading converted to h2 and colored with Bootstrap's text-info accent --}}
<h1 class="h2 text-info mb-4">Shows in {{ $genre }}</h1>

{{-- Converted to Bootstrap row-cols grid (3 columns on medium screens and up) --}}
<div class="row row-cols-1 row-cols-md-3 g-4">
    @forelse($shows as $show)
    <div class="col">
        {{-- Card: bg-dark for the dark card look, text-light for white text, shadow for depth, and border-info accent --}}
        <div class="card h-100 bg-dark text-light border-info shadow-lg">
            
            <div class="card-body">
                {{-- Title converted to h5 with card-title --}}
                <h5 class="card-title text-light mb-1">{{ $show->Name }}</h5>
                
                {{-- Details use card-text and smaller/secondary text for hierarchy --}}
                <p class="card-text text-light small mb-1">Release: {{ $show->Release }}</p>
                <p class="card-text text-secondary small mb-2">Country: {{ $show->Country }}</p>
                
                {{-- Button uses btn and btn-info for the cyan accent --}}
                <a href="{{ route('user.shows.show', $show->Series_ID) }}"
                   class="btn btn-info btn-sm mt-2">
                   View Episodes
                </a>
            </div>
        </div>
    </div>
    @empty
    {{-- Empty state spans all 3 columns --}}
    <div class="col-12">
        <p class="text-center text-secondary">No shows in this genre.</p>
    </div>
    @endforelse
</div>

{{-- Pagination links styled with Bootstrap 5 template --}}
<div class="mt-4">
    {{ $shows->links('pagination::bootstrap-5') }}
</div>
@endsection