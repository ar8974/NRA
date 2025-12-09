@extends('layouts.admin')
@section('content')
<h1 class="h4 mb-3">Add Producer</h1>
<form method="POST" action="{{ route('admin.producers.store') }}" class="bg-white p-4 rounded">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">First Name</label>
            <input name="F_Name" value="{{ old('F_Name') }}" class="form-control" />
            @error('F_Name')<div class="text-danger small">{{ $message }}</div>@enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Last Name</label>
            <input name="L_Name" value="{{ old('L_Name') }}" class="form-control" />
            @error('L_Name')<div class="text-danger small">{{ $message }}</div>@enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Street</label>
            <input name="Street" value="{{ old('Street') }}" class="form-control" />
            @error('Street')<div class="text-danger small">{{ $message }}</div>@enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">City</label>
            <input name="City" value="{{ old('City') }}" class="form-control" />
            @error('City')<div class="text-danger small">{{ $message }}</div>@enderror
        </div>
        <div class="col-md-4">
            <label class="form-label">ZIP</label>
            <input name="ZIP" value="{{ old('ZIP') }}" class="form-control" />
            @error('ZIP')<div class="text-danger small">{{ $message }}</div>@enderror
        </div>
        <div class="col-md-4">
            <label class="form-label">Phone Code</label>
            <input name="Phone_code" value="{{ old('Phone_code') }}" class="form-control" />
            @error('Phone_code')<div class="text-danger small">{{ $message }}</div>@enderror
        </div>
        <div class="col-md-4">
            <label class="form-label">Local Phone</label>
            <input name="Local_Phone" value="{{ old('Local_Phone') }}" class="form-control" />
            @error('Local_Phone')<div class="text-danger small">{{ $message }}</div>@enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input name="Email" value="{{ old('Email') }}" class="form-control" />
            @error('Email')<div class="text-danger small">{{ $message }}</div>@enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Country</label>
            <select name="Country_Code" class="form-select">
                <option value="">Select Country</option>
                @foreach($countries as $country)
                <option value="{{ $country->Country_Code }}" {{ old('Country_Code') == $country->Country_Code ? 'selected' : '' }}>
                    {{ $country->Country }}
                </option>
                @endforeach
            </select>
            @error('Country_Code')<div class="text-danger small">{{ $message }}</div>@enderror
        </div>
    </div>
    <div class="mt-4">
        <button class="btn btn-primary">Create</button>
        <a href="{{ route('admin.producers.index') }}" class="btn btn-link">Cancel</a>
    </div>
</form>
@endsection
