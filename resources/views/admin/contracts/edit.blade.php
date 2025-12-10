@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-4">Edit Contract</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.contracts.update', $contract) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Select Series</label>
        <select name="Series_ID" class="form-select" required>
            <option value="">-- Choose Series --</option>
            @foreach($webseries as $series)
                <option value="{{ $series->Series_ID }}" @selected($contract->Series_ID == $series->Series_ID)>{{ $series->Name }}</option>
            @endforeach
        </select>
        @error('Series_ID') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Start Date</label>
        <input type="date" name="Contract_date" value="{{ old('Contract_date', $contract->Contract_date) }}" class="form-control" required>
        @error('Contract_date') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">End Date</label>
        <input type="date" name="Contract_end" value="{{ old('Contract_end', $contract->Contract_end) }}" class="form-control" required>
        @error('Contract_end') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Charge per Episode</label>
        <input type="number" step="0.01" name="Charge_per_ep" value="{{ old('Charge_per_ep', $contract->Charge_per_ep) }}" class="form-control" required>
        @error('Charge_per_ep') <p class="text-danger small">{{ $message }}</p> @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-warning text-white">Update Contract</button>
        <a href="{{ route('admin.contracts.index') }}" class="btn btn-outline-secondary ms-2">Cancel</a>
    </div>
</form>

@endsection
