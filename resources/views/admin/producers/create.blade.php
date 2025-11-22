@extends('layouts.admin')
@section('content')
<h1 class="text-2xl font-bold">Add Producer</h1>
<form method="POST" action="{{ route('admin.producers.store') }}" class="mt-4 space-y-4 bg-white p-4 rounded">
    @csrf
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm">First Name</label>
            <input name="F_Name" value="{{ old('F_Name') }}" class="border p-2 w-full" />
            @error('F_Name')<div class="text-red-600">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm">Last Name</label>
            <input name="L_Name" value="{{ old('L_Name') }}" class="border p-2 w-full" />
            @error('L_Name')<div class="text-red-600">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm">Street</label>
            <input name="Street" value="{{ old('Street') }}" class="border p-2 w-full" />
            @error('Street')<div class="text-red-600">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm">City</label>
            <input name="City" value="{{ old('City') }}" class="border p-2 w-full" />
            @error('City')<div class="text-red-600">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm">ZIP</label>
            <input name="ZIP" value="{{ old('ZIP') }}" class="border p-2 w-full" />
            @error('ZIP')<div class="text-red-600">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm">Phone Code</label>
            <input name="Phone_code" value="{{ old('Phone_code') }}" class="border p-2 w-full" />
            @error('Phone_code')<div class="text-red-600">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm">Local Phone</label>
            <input name="Local_Phone" value="{{ old('Local_Phone') }}" class="border p-2 w-full" />
            @error('Local_Phone')<div class="text-red-600">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm">Email</label>
            <input name="Email" value="{{ old('Email') }}" class="border p-2 w-full" />
            @error('Email')<div class="text-red-600">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm">Country</label>
            <select name="Country_Code" class="border p-2 w-full">
                <option value="">Select Country</option>
                @foreach($countries as $country)
                <option value="{{ $country->Country_Code }}" {{ old('Country_Code') == $country->Country_Code ? 'selected' : '' }}>
                    {{ $country->Country }}
                </option>
                @endforeach
            </select>
            @error('Country_Code')<div class="text-red-600">{{ $message }}</div>@enderror
        </div>
    </div>
    <div class="mt-4">
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
        <a href="{{ route('admin.producers.index') }}" class="ml-2">Cancel</a>
    </div>
</form>
@endsection
