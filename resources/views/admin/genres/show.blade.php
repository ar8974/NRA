@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-3">Genre Details</h1>

<div class="card mb-3">
    <div class="card-body">
        <p class="mb-2"><strong>ID:</strong> {{ $genre->Genre_ID }}</p>
        <p class="mb-0"><strong>Genre Name:</strong> {{ $genre->Name }}</p>
    </div>
</div>

<a href="{{ route('admin.genres.index') }}" class="btn btn-secondary">Back</a>
@endsection
