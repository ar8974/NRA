@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-4">Add Genre</h1>

<form method="POST" action="{{ route('admin.genres.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Genre ID</label>
        <input type="number" name="Genre_ID" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Genre Name</label>
        <input type="text" name="Name" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection
