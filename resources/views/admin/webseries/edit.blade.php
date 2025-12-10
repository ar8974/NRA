@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-4">Edit Webseries</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.webseries.update', $webseries->Series_ID) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="Name" class="form-control" value="{{ old('Name', $webseries->Name) }}">
        @error('Name') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Release Date</label>
        <input type="date" name="Release" class="form-control" value="{{ old('Release', $webseries->Release) }}">
        @error('Release') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Production House</label>
        <select name="House_ID" class="form-select">
            @foreach($houses as $h)
                <option value="{{ $h->House_ID }}" @selected($h->House_ID == $webseries->House_ID)>{{ $h->Name }}</option>
            @endforeach
        </select>
        @error('House_ID') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Country</label>
        <select name="Country" class="form-select">
            @foreach($countries as $c)
                <option value="{{ $c->Country_Code }}" @selected($c->Country_Code == $webseries->Country)>{{ $c->Country }}</option>
            @endforeach
        </select>
        @error('Country') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Genres</label>
        <select name="genres[]" multiple class="form-select" size="6">
            @foreach($genres as $g)
                <option value="{{ $g->Genre_ID }}" @selected(in_array($g->Genre_ID, $selectedGenres))>{{ $g->Name }}</option>
            @endforeach
        </select>
        @error('genres') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <button class="btn btn-primary">Update</button>
</form>

@endsection
