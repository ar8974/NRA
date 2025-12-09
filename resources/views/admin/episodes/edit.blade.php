@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-4">Edit Episode</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.episodes.update', $episode) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Episode Title</label>
        <input type="text" name="Title" value="{{ old('Title', $episode->Title) }}" class="form-control">
        @error('Title') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Episode Number</label>
        <input type="number" name="Ep_No" value="{{ old('Ep_No', $episode->Ep_No) }}" class="form-control">
        @error('Ep_No') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Select Series</label>
        <select name="Series_ID" class="form-select" required>
            <option value="">-- Choose Series --</option>
            @foreach($webseries as $series)
                <option value="{{ $series->Series_ID }}" @selected(old('Series_ID', $episode->Series_ID) == $series->Series_ID)>{{ $series->Name }}</option>
            @endforeach
        </select>
        @error('Series_ID') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Update Episode</button>
        <a href="{{ route('admin.episodes.index') }}" class="btn btn-outline-secondary ms-2">Cancel</a>
    </div>
</form>

@endsection
