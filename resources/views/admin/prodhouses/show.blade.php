@extends('layouts.admin')

@section('content')
<h1 class="h4 mb-3">Production House Details</h1>

<div class="card mb-3">
    <div class="card-body">
        <p class="mb-2"><strong>House ID:</strong> {{ $prodhouse->House_ID }}</p>
        <p class="mb-2"><strong>Name:</strong> {{ $prodhouse->Name }}</p>
        <p class="mb-2"><strong>Street:</strong> {{ $prodhouse->Street }}</p>
        <p class="mb-2"><strong>City:</strong> {{ $prodhouse->City }}</p>
        <p class="mb-2"><strong>ZIP:</strong> {{ $prodhouse->ZIP }}</p>
        <p class="mb-2"><strong>Year Established:</strong> {{ $prodhouse->Year_Est }}</p>
        <p class="mb-0"><strong>Country Code:</strong> {{ $prodhouse->Country_Code }}</p>
    </div>
</div>

<a href="{{ route('admin.prodhouses.index') }}" class="btn btn-secondary">Back</a>
@endsection
