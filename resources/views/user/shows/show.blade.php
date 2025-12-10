@extends('layouts.user')

@section('content')
{{-- Main Heading: Kept the accent color (text-info) --}}
<h1 class="h2 text-info mb-4">{{ $show->Name }}</h1>

{{-- Show Details Card: Changed to light theme card (bg-white, text-dark) --}}
<div class="card bg-white text-dark border-secondary mb-4 shadow-sm">
    <div class="card-body">
        <h4 class="card-title mb-3 text-dark">Series Information</h4>
        <p class="card-text mb-2"><strong>Release:</strong> <span class="text-dark">{{ $show->Release }}</span></p>
        {{-- text-muted is a light gray that works well on white backgrounds --}}
        <p class="card-text mb-0"><strong>Country:</strong> <span class="text-muted">{{ $show->Country }}</span></p>
    </div>
</div>

{{-- Episode Heading: Changed to text-dark --}}
<h2 class="h4 mt-4 mb-3 text-dark">Episodes</h2>
@if($episodes->count())
{{-- Episodes List: Changed to light theme card --}}
<div class="card bg-white border-secondary">
    <ul class="list-group list-group-flush">
        @foreach($episodes as $ep)
        {{-- List item styled with a subtle bg-light for striping effect --}}
        <li class="list-group-item bg-light text-dark border-secondary">
            <strong>{{ $ep->Ep_No }}.</strong> {{ $ep->Title }}
        </li>
        @endforeach
    </ul>
</div>
@else
<p class="text-muted">No episodes available.</p>
@endif

{{-- Back Link: Converted to a primary button (btn-info) --}}
<a href="{{ route('user.shows.index') }}" class="btn btn-info mt-4 text-white">
    Back to Shows
</a>
@endsection