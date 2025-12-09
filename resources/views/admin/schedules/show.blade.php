@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-3">Schedule Details</h1>

<div class="card mb-3">
    <div class="card-body">
        <p class="mb-2"><strong>Episode:</strong> {{ $schedule->episode->Title ?? 'N/A' }}</p>
        <p class="mb-2"><strong>Air Date:</strong> {{ $schedule->Air_Date }}</p>
        <p class="mb-0"><strong>Duration:</strong> {{ $schedule->Duration_Minutes }} minutes</p>
    </div>
</div>

<a href="{{ route('admin.schedules.index') }}" class="btn btn-secondary">Back</a>

@endsection
