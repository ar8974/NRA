@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold">Edit Producer – {{ $producer->F_Name }} {{ $producer->L_Name }}</h1>

<form method="POST" action="{{ route('admin.producers.update', $producer->Prod_ID) }}" class="mt-4 space-y-4 bg-white p-4 rounded">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-sm font-medium">First Name</label>
        <input name="F_Name" value="{{ old('F_Name', $producer->F_Name) }}" class="border p-2 w-full" />
        @error('F_Name')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Last Name</label>
        <input name="L_Name" value="{{ old('L_Name', $producer->L_Name) }}" class="border p-2 w-full" />
        @error('L_Name')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Street</label>
        <input name="Street" value="{{ old('Street', $producer->Street) }}" class="border p-2 w-full" />
        @error('Street')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">City</label>
        <input name="City" value="{{ old('City', $producer->City) }}" class="border p-2 w-full" />
        @error('City')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">ZIP</label>
        <input name="ZIP" value="{{ old('ZIP', $producer->ZIP) }}" class="border p-2 w-full" />
        @error('ZIP')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Phone Code</label>
        <input name="Phone_code" value="{{ old('Phone_code', $producer->Phone_code) }}" class="border p-2 w-full" />
        @error('Phone_code')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Local Phone</label>
        <input name="Local_Phone" value="{{ old('Local_Phone', $producer->Local_Phone) }}" class="border p-2 w-full" />
        @error('Local_Phone')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Email</label>
        <input name="Email" value="{{ old('Email', $producer->Email) }}" class="border p-2 w-full" />
        @error('Email')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Country</label>
        <select name="Country_Code" class="border p-2 w-full">
            @foreach($countries as $country)
                <option value="{{ $country->Country_Code }}" @selected(old('Country_Code', $producer->Country_Code) == $country->Country_Code)>{{ $country->Country }}</option>
            @endforeach
        </select>
        @error('Country_Code')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>

    <div class="flex items-center gap-2">
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('admin.producers.index') }}" class="text-gray-700">Cancel</a>
    </div>
</form>
@endsection
