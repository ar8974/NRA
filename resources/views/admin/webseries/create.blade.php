@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-4">Add Webseries</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.webseries.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="Name" class="form-control" value="{{ old('Name') }}">
        @error('Name') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Release Date</label>
        <input type="date" name="Release" class="form-control" value="{{ old('Release') }}">
        @error('Release') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Production House</label>
        <select name="House_ID" class="form-select">
            <option value="">-- Select --</option>
            @foreach($houses as $h)
                <option value="{{ $h->House_ID }}">{{ $h->Name }}</option>
            @endforeach
        </select>
        @error('House_ID') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Country</label>
        <select name="Country" class="form-select" required>
            <option value="">Select Country</option>
            @foreach ($countries as $c)
                <option value="{{ $c->Country_Code }}">{{ $c->Country }}</option>
            @endforeach
        </select>
        @error('Country') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Genres</label>
        <select name="genres[]" multiple class="form-select" size="6">
            @foreach($genres as $g)
                <option value="{{ $g->Genre_ID }}">{{ $g->Name }}</option>
            @endforeach
        </select>
        <small class="text-muted">Hold Ctrl/Cmd to select multiple</small>
        @error('genres') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <button class="btn btn-primary">Create</button>
</form>

@endsection
