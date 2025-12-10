@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-3">Viewer Details</h1>

<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Account Information</h5>
        <p class="mb-2"><strong>ID:</strong> {{ $viewer->View_ID }}</p>
        <p class="mb-2"><strong>Full Name:</strong> {{ $viewer->F_Name }} {{ $viewer->L_Name }}</p>
        <p class="mb-2"><strong>Country:</strong> {{ $viewer->country->Country ?? 'N/A' }}</p>
        <p class="mb-2"><strong>Account Date:</strong> {{ $viewer->Acc_date }}</p>
        <p class="mb-0"><strong>Monthly Charge:</strong> ${{ number_format($viewer->Monthly_Charge, 2) }}</p>

        <h5 class="card-title mt-4">Address Details</h5>
        <p class="mb-1"><strong>Street:</strong> {{ $viewer->Street }}</p>
        <p class="mb-1"><strong>City:</strong> {{ $viewer->City }}</p>
        <p class="mb-1"><strong>ZIP:</strong> {{ $viewer->ZIP }}</p>
    </div>
</div>

{{-- Navigation buttons --}}
<a href="{{ route('admin.viewers.edit', $viewer->View_ID) }}" class="btn btn-warning text-white">Edit</a>
<a href="{{ route('admin.viewers.index') }}" class="btn btn-secondary ms-2">Back to List</a>

@endsection