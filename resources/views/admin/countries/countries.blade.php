@extends('layouts.admin')
@section('content')
  <h1 class="text-2xl font-bold">Add Country</h1>
  <form method="POST" action="{{ route('admin.countries.store') }}" class="mt-4 space-y-4 bg-white p-4 rounded">
    @csrf
    <div>
      <label class="block text-sm">Country Code</label>
      <input name="Country_Code" class="border p-2 w-32" />
      @error('Country_Code')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>
    <div>
      <label class="block text-sm">Country</label>
      <input name="Country" class="border p-2 w-full" />
      @error('Country')<div class="text-red-600">{{ $message }}</div>@enderror
    </div>
    <div>
      <button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
      <a href="{{ route('admin.countries.index') }}" class="ml-2">Cancel</a>
    </div>
  </form>
@endsection
