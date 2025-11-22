@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Add Webseries</h1>

    <form action="{{ route('admin.webseries.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block">Name</label>
            <input type="text" name="Name" class="border p-2 w-full" value="{{ old('Name') }}">
            @error('Name') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">Release Date</label>
            <input type="date" name="Release" class="border p-2 w-full" value="{{ old('Release') }}">
            @error('Release') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">Production House</label>
            <select name="House_ID" class="border p-2 w-full">
                <option value="">-- Select --</option>
                @foreach($houses as $h)
                    <option value="{{ $h->House_ID }}">{{ $h->Name }}</option>
                @endforeach
            </select>
            @error('House_ID') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">Country</label>
            <select name="Country" class="border p-2 w-full" required>
                <option value="">Select Country</option>
                @foreach ($countries as $c)
                    <option value="{{ $c->Country_Code }}">
                        {{ $c->Country }}
                    </option>
                @endforeach
            </select>
            @error('Country') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">Genres</label>
            <select name="genres[]" multiple class="border p-2 w-full h-40">
                @foreach($genres as $g)
                    <option value="{{ $g->Genre_ID }}">{{ $g->Name }}</option>
                @endforeach
            </select>
            <small class="text-gray-500">Hold Ctrl/Cmd to select multiple</small>
            @error('genres') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
