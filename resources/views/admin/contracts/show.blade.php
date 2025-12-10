@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-3">Contract Details</h1>

<div class="card mb-3">
	<div class="card-body">
		<p class="mb-2"><strong>ID:</strong> {{ $contract->Contract_ID }}</p>
		<p class="mb-2"><strong>Series:</strong> {{ $contract->webseries->Name ?? 'N/A' }}</p>
		<p class="mb-2"><strong>Start Date:</strong> {{ $contract->Contract_date }}</p>
		<p class="mb-0"><strong>End Date:</strong> {{ $contract->Contract_end }}</p>
		<p class="mb-2"><strong>Charge per Episode:</strong> {{ $contract->Charge_per_ep }}</p>
	</div>
</div>

<a href="{{ route('admin.contracts.index') }}" class="btn btn-secondary">Back</a>

@endsection
