@extends('layouts.admin')
@section('content')
  <h1 class="text-2xl font-bold">Edit Country – {{ $country->Country_Code }}</h1>
  <form method="POST" action="{{ route('admin.countries.update', $country->Country_Code) }}" class="mt-4 space-y-4 bg-white p-4 rounded">
    @csrf @method('PUT')
    <div>
      <label class="block text-sm">Country</label>
      <input name="Country" value="{{ old('Country',$country->Country) }}" class="border p-2 w-full" />
      @error('Country')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>
    <div>
      <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
      <a href="{{ route('admin.countries.index') }}" class="ml-2">Cancel</a>
    </div>
  </form>
@endsection
