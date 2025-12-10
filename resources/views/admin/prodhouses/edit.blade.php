@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4 mb-0">Edit Production House</h1>
    <a href="{{ route('admin.prodhouses.index') }}" class="btn btn-secondary">Back</a>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.prodhouses.update', $prodhouse->House_ID) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="Name" value="{{ old('Name', $prodhouse->Name) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Street</label>
        <input type="text" name="Street" value="{{ old('Street', $prodhouse->Street) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" name="City" value="{{ old('City', $prodhouse->City) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">ZIP</label>
        <input type="text" name="ZIP" value="{{ old('ZIP', $prodhouse->ZIP) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Year Established</label>
        <input type="number" name="Year_Est" value="{{ old('Year_Est', $prodhouse->Year_Est) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Country</label>
        <select name="Country_Code" class="form-select">
            <option value="">Select Country</option>
            @foreach($countries as $country)
                <option value="{{ $country->Country_Code }}"
                    {{ $prodhouse->Country_Code == $country->Country_Code ? 'selected' : '' }}>
                    {{ $country->Country }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-warning text-white">Update</button>
</form>
@endsection
