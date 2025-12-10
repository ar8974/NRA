@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-4">Add Production House</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.prodhouses.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="Name" class="form-control" value="{{ old('Name') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Street</label>
        <input type="text" name="Street" class="form-control" value="{{ old('Street') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" name="City" class="form-control" value="{{ old('City') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">ZIP</label>
        <input type="text" name="ZIP" class="form-control" value="{{ old('ZIP') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Year Established</label>
        <input type="number" name="Year_Est" class="form-control" value="{{ old('Year_Est') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Country</label>
        <select name="Country_Code" class="form-select">
            <option value="">Select Country</option>
            @foreach($countries as $country)
                <option value="{{ $country->Country_Code }}"
                    {{ (isset($prodhouse) && $prodhouse->Country_Code == $country->Country_Code) ? 'selected' : '' }}>
                    {{ $country->Country }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection
