@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Episode Details</h1>

    <div class="mb-4">
        <strong>Episode ID:</strong> {{ $episode->Ep_ID }}
    </div>
    <div class="mb-4">
        <strong>Title:</strong> {{ $episode->Title }}
    </div>
    <div class="mb-4">
        <strong>Series:</strong> {{ $episode->webseries->Name ?? 'N/A' }}
    </div>
    <div class="mb-4">
        <strong>Episode Number:</strong> {{ $episode->Ep_No }}
    </div>

    <div class="flex gap-2">
        <a href="{{ route('admin.episodes.edit', $episode) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
        <a href="{{ route('admin.episodes.index') }}" class="bg-gray-200 px-4 py-2 rounded">Back</a>
    </div>
</div>
@endsection
