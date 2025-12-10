@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-4">Add New Episode</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.episodes.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Episode Title</label>
        <input type="text" name="Title" value="{{ old('Title') }}" class="form-control" placeholder="Episode Title">
        @error('Title') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Episode Number</label>
        <input type="number" name="Ep_No" value="{{ old('Ep_No') }}" class="form-control" placeholder="Episode Number">
        @error('Ep_No') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Select Series</label>
        <select name="Series_ID" class="form-select" required>
            <option value="">-- Choose Series --</option>
            @forelse($webseries as $series)
                <option value="{{ $series->Series_ID }}" @selected(old('Series_ID') == $series->Series_ID)>{{ $series->Name }}</option>
            @empty
                <option value="" disabled>No series available</option>
            @endforelse
        </select>
        @error('Series_ID') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Add Episode</button>
        <a href="{{ route('admin.episodes.index') }}" class="btn btn-outline-secondary ms-2">Cancel</a>
    </div>
</form>

@endsection
