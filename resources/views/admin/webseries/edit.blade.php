@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Webseries</h1>

    <form action="{{ route('admin.webseries.update', $webseries->Series_ID) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block">Name</label>
            <input type="text" name="Name" class="border p-2 w-full" value="{{ old('Name', $webseries->Name) }}">
            @error('Name') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">Release Date</label>
            <input type="date" name="Release" class="border p-2 w-full"
                   value="{{ old('Release', $webseries->Release) }}">
            @error('Release') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">Production House</label>
            <select name="House_ID" class="border p-2 w-full">
                @foreach($houses as $h)
                    <option value="{{ $h->House_ID }}" @selected($h->House_ID == $webseries->House_ID)>
                        {{ $h->Name }}
                    </option>
                @endforeach
            </select>
            @error('House_ID') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">Country</label>
            <select name="Country" class="border p-2 w-full">
                @foreach($countries as $c)
                    <option value="{{ $c->Country_Code }}" @selected($c->Country_Code == $webseries->Country)>
                        {{ $c->Name }}
                    </option>
                @endforeach
            </select>
            @error('Country') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">Genres</label>
            <select name="genres[]" multiple class="border p-2 w-full h-40">
                @foreach($genres as $g)
                    <option value="{{ $g->Genre_ID }}" 
                        @selected(in_array($g->Genre_ID, $selectedGenres))>
                        {{ $g->Name }}
                    </option>
                @endforeach
            </select>
            @error('genres') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
