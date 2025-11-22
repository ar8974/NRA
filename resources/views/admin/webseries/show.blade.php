@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Webseries Details</h1>

    <div class="bg-white shadow p-4 rounded space-y-3">
        <p><strong>ID:</strong> {{ $webseries->Series_ID }}</p>
        <p><strong>Name:</strong> {{ $webseries->Name }}</p>
        <p><strong>Release:</strong> {{ $webseries->Release }}</p>
        <p><strong>Production House:</strong> {{ $webseries->prodhouse->Name ?? 'N/A' }}</p>
        <p><strong>Country:</strong> {{ $webseries->Country }}</p>

        <p><strong>Genres:</strong></p>
        <div class="flex flex-wrap gap-2">
            @foreach($webseries->genres as $g)
                <span class="bg-gray-200 px-2 py-1 rounded text-sm">{{ $g->Name }}</span>
            @endforeach
            @if($webseries->genres->isEmpty())
                <span class="text-gray-500">No genres assigned</span>
            @endif
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.webseries.edit', $webseries->Series_ID) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
        <a href="{{ route('admin.webseries.index') }}" class="ml-2 bg-gray-500 text-white px-4 py-2 rounded">Back</a>
    </div>
</div>
@endsection
