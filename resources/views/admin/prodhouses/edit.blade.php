@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Edit Production House</h1>
    <a href="{{ route('admin.prodhouses.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded">
        Back
    </a>
</div>

@if($errors->any())
    <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
        <ul class="list-disc pl-5">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.prodhouses.update', $prodhouse->House_ID) }}" method="POST" class="bg-white p-6 rounded shadow">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Name</label>
        <input type="text" name="Name" value="{{ old('Name', $prodhouse->Name) }}" class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Street</label>
        <input type="text" name="Street" value="{{ old('Street', $prodhouse->Street) }}" class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">City</label>
        <input type="text" name="City" value="{{ old('City', $prodhouse->City) }}" class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">ZIP</label>
        <input type="text" name="ZIP" value="{{ old('ZIP', $prodhouse->ZIP) }}" class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Year Established</label>
        <input type="number" name="Year_Est" value="{{ old('Year_Est', $prodhouse->Year_Est) }}" class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-semibold">Country</label>
        <select name="Country_Code" class="w-full border p-2 rounded">
            <option value="">Select Country</option>
            @foreach($countries as $country)
                <option value="{{ $country->Country_Code }}"
                    {{ $prodhouse->Country_Code == $country->Country_Code ? 'selected' : '' }}>
                    {{ $country->Country }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Update Production House
    </button>
</form>
@endsection
