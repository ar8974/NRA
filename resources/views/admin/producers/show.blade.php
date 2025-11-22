@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Producer Details – {{ $producer->F_Name }} {{ $producer->L_Name }}</h1>

<div class="bg-white p-6 rounded shadow space-y-4">
    <div><strong>First Name:</strong> {{ $producer->F_Name }}</div>
    <div><strong>Last Name:</strong> {{ $producer->L_Name }}</div>
    <div><strong>Street:</strong> {{ $producer->Street }}</div>
    <div><strong>City:</strong> {{ $producer->City }}</div>
    <div><strong>ZIP:</strong> {{ $producer->ZIP }}</div>
    <div><strong>Phone Code:</strong> {{ $producer->Phone_code }}</div>
    <div><strong>Local Phone:</strong> {{ $producer->Local_Phone }}</div>
    <div><strong>Email:</strong> {{ $producer->Email }}</div>
    <div><strong>Country:</strong> {{ $producer->country->Country ?? $producer->Country_Code }}</div>
</div>

<div class="mt-4">
    <a href="{{ route('admin.producers.index') }}" class="bg-gray-200 px-4 py-2 rounded">Back to List</a>
    <a href="{{ route('admin.producers.edit', $producer->Prod_ID) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
</div>
@endsection
