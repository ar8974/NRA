@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Schedule Details</h1>

    <div class="mb-4">
        <strong>Episode:</strong> {{ $schedule->episode->Title ?? 'N/A' }}
    </div>
    <div class="mb-4">
        <strong>Air Date:</strong> {{ $schedule->Air_Date }}
    </div>
    <div class="mb-4">
        <strong>Duration:</strong> {{ $schedule->Duration_Minutes }} minutes
    </div>

    <a href="{{ route('admin.schedules.index') }}" class="px-4 py-2 rounded border">Back</a>
</div>
@endsection
