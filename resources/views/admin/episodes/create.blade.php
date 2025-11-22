@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Add New Episode</h1>

    <form action="{{ route('admin.episodes.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium">Episode Title</label>
            <input type="text" name="Title" value="{{ old('Title') }}"
                   class="border p-2 w-full rounded" placeholder="Episode Title">
            @error('Title')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Episode Number</label>
            <input type="number" name="Ep_No" value="{{ old('Ep_No') }}"
                   class="border p-2 w-full rounded" placeholder="Episode Number">
            @error('Ep_No')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Select Series</label>
            <select name="Series_ID" class="border p-2 w-full rounded" required>
                <option value="">-- Choose Series --</option>
                @forelse($webseries as $series)
                <option value="{{ $series->Series_ID }}" @selected(old('Series_ID') == $series->Series_ID)>
                    {{ $series->Name }}
                </option>
                @empty
                    <option value="" disabled>No series available</option>
                @endforelse
            </select>
            @error('Series_ID')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Add Episode</button>
            <a href="{{ route('admin.episodes.index') }}" class="px-4 py-2 rounded border">Cancel</a>
        </div>
    </form>
</div>
@endsection
