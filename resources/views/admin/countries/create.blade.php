@extends('layouts.admin')
@section('content')
<h1 class="h4 mb-3">Add New Country</h1>

<form method="POST" action="{{ route('admin.countries.store') }}" class="bg-white p-4 rounded">
    @csrf
    <div class="mb-3">
        <label class="form-label">Country Code</label>
        <input name="Country_Code" value="{{ old('Country_Code') }}" class="form-control" />
        @error('Country_Code')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Country Name</label>
        <input name="Country" value="{{ old('Country') }}" class="form-control" />
        @error('Country')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    <div>
        <button class="btn btn-success">Add Country</button>
        <a href="{{ route('admin.countries.index') }}" class="btn btn-link">Cancel</a>
    </div>
</form>
@endsection
