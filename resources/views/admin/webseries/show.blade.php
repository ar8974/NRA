@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-3">Webseries Details</h1>

<div class="card mb-3">
    <div class="card-body">
        <p class="mb-2"><strong>ID:</strong> {{ $webseries->Series_ID }}</p>
        <p class="mb-2"><strong>Name:</strong> {{ $webseries->Name }}</p>
        <p class="mb-2"><strong>Release:</strong> {{ $webseries->Release }}</p>
        <p class="mb-2"><strong>Production House:</strong> {{ $webseries->prodhouse->Name ?? 'N/A' }}</p>
        <p class="mb-2"><strong>Country:</strong> {{ $webseries->Country }}</p>

        <p class="mb-2"><strong>Genres:</strong></p>
        <div>
            @foreach($webseries->genres as $g)
                <span class="badge bg-light text-dark border me-1">{{ $g->Name }}</span>
            @endforeach
            @if($webseries->genres->isEmpty())
                <span class="text-muted">No genres assigned</span>
            @endif
        </div>
    </div>
</div>

<a href="{{ route('admin.webseries.edit', $webseries->Series_ID) }}" class="btn btn-warning text-white">Edit</a>
<a href="{{ route('admin.webseries.index') }}" class="btn btn-secondary ms-2">Back</a>

@endsection
