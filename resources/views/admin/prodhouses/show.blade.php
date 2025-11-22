@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Production House Details</h1>

    <ul class="space-y-2">
        <li><strong>House ID:</strong> {{ $prodhouse->House_ID }}</li>
        <li><strong>Name:</strong> {{ $prodhouse->Name }}</li>
        <li><strong>Street:</strong> {{ $prodhouse->Street }}</li>
        <li><strong>City:</strong> {{ $prodhouse->City }}</li>
        <li><strong>ZIP:</strong> {{ $prodhouse->ZIP }}</li>
        <li><strong>Year Established:</strong> {{ $prodhouse->Year_Est }}</li>
        <li><strong>Country Code:</strong> {{ $prodhouse->Country_Code }}</li>
    </ul>

    <div class="mt-4">
        <a href="{{ route('admin.prodhouses.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back</a>
    </div>
</div>
@endsection
