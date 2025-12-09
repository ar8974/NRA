@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-4">Add New Schedule</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.schedules.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Episode</label>
        <select name="Ep_ID" class="form-select" required>
            <option value="">-- Select Episode --</option>
            @foreach($episodes as $ep)
                <option value="{{ $ep->Ep_ID }}" @selected(old('Ep_ID') == $ep->Ep_ID)>{{ $ep->Title }} ({{ $ep->webseries->Name ?? 'N/A' }})</option>
            @endforeach
        </select>
        @error('Ep_ID') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Start Date &amp; Time</label>
        <input type="datetime-local" name="Ep_Start" value="{{ old('Ep_Start') }}" class="form-control" required>
        @error('Ep_Start') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">End Date &amp; Time</label>
        <input type="datetime-local" name="Ep_End" value="{{ old('Ep_End') }}" class="form-control" required>
        @error('Ep_End') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Technical Interrupt</label>
        <select name="Tech_Interrupt" class="form-select" required>
            <option value="YES" @selected(old('Tech_Interrupt')=='YES')>YES</option>
            <option value="NO" @selected(old('Tech_Interrupt')=='NO')>NO</option>
        </select>
        @error('Tech_Interrupt') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Viewers</label>
        <input type="number" name="Viewers" value="{{ old('Viewers') }}" min="0" class="form-control" required>
        @error('Viewers') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Add Schedule</button>
        <a href="{{ route('admin.schedules.index') }}" class="btn btn-outline-secondary ms-2">Cancel</a>
    </div>
</form>

@endsection
