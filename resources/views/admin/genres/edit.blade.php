@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-4">Edit Genre</h1>

<form method="POST" action="{{ route('admin.genres.update', $genre) }}">
    @csrf @method('PUT')

    <div class="mb-3">
        <label class="form-label">Genre ID</label>
        <input type="number" value="{{ $genre->Genre_ID }}" disabled class="form-control-plaintext bg-light" readonly>
    </div>

    <div class="mb-3">
        <label class="form-label">Genre Name</label>
        <input type="text" name="Name" value="{{ $genre->Name }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-warning text-white">Update</button>
</form>
@endsection
