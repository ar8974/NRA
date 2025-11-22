@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Add Production House</h1>

    @if($errors->any())
        <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.prodhouses.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" name="Name" class="w-full border p-2 rounded" value="{{ old('Name') }}" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Street</label>
            <input type="text" name="Street" class="w-full border p-2 rounded" value="{{ old('Street') }}">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">City</label>
            <input type="text" name="City" class="w-full border p-2 rounded" value="{{ old('City') }}">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">ZIP</label>
            <input type="text" name="ZIP" class="w-full border p-2 rounded" value="{{ old('ZIP') }}">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Year Established</label>
            <input type="number" name="Year_Est" class="w-full border p-2 rounded" value="{{ old('Year_Est') }}">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Country</label>
            <select name="Country_Code" class="w-full border p-2 rounded">
                <option value="">Select Country</option>
                @foreach($countries as $country)
                    <option value="{{ $country->Country_Code }}"
                        {{ (isset($prodhouse) && $prodhouse->Country_Code == $country->Country_Code) ? 'selected' : '' }}>
                        {{ $country->Country }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
    </form>
</div>
@endsection
