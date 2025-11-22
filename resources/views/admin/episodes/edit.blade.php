@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Edit Episode</h1>

    <form action="{{ route('admin.episodes.update', $episode) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium">Episode Title</label>
            <input type="text" name="Title" value="{{ old('Title', $episode->Title) }}"
                   class="border p-2 w-full rounded">
            @error('Title')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Episode Number</label>
            <input type="number" name="Ep_No" value="{{ old('Ep_No', $episode->Ep_No) }}"
                   class="border p-2 w-full rounded">
            @error('Ep_No')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Select Series</label>
            <select name="Series_ID" class="border p-2 w-full rounded" required>
                <option value="">-- Choose Series --</option>
                @foreach($webseries as $series)
                    <option value="{{ $series->Series_ID }}" @selected(old('Series_ID', $episode->Series_ID) == $series->Series_ID)>
                        {{ $series->Name }}
                    </option>
                @endforeach
            </select>
            @error('Series_ID')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Episode</button>
            <a href="{{ route('admin.episodes.index') }}" class="px-4 py-2 rounded border">Cancel</a>
        </div>
    </form>
</div>
@endsection
