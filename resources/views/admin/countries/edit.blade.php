@extends('layouts.admin')
@section('content')
  <h1 class="h4 mb-3">Edit Country – {{ $country->Country_Code }}</h1>
  <form method="POST" action="{{ route('admin.countries.update', $country->Country_Code) }}" class="bg-white p-4 rounded">
    @csrf @method('PUT')
    <div class="mb-3">
      <label class="form-label">Country</label>
      <input name="Country" value="{{ old('Country',$country->Country) }}" class="form-control" />
      @error('Country')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>
    <div>
      <button class="btn btn-primary">Update</button>
      <a href="{{ route('admin.countries.index') }}" class="btn btn-link">Cancel</a>
    </div>
  </form>
@endsection
