@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-3">Episode Details</h1>

<div class="card mb-3">
    <div class="card-body">
        <p class="mb-2"><strong>Episode ID:</strong> {{ $episode->Ep_ID }}</p>
        <p class="mb-2"><strong>Title:</strong> {{ $episode->Title }}</p>
        <p class="mb-2"><strong>Series:</strong> {{ $episode->webseries->Name ?? 'N/A' }}</p>
        <p class="mb-0"><strong>Episode Number:</strong> {{ $episode->Ep_No }}</p>
    </div>
</div>

<a href="{{ route('admin.episodes.edit', $episode) }}" class="btn btn-warning text-white">Edit</a>
<a href="{{ route('admin.episodes.index') }}" class="btn btn-secondary ms-2">Back</a>

@endsection
