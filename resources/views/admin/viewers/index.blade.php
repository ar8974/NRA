@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Viewers</h1>
    <a href="{{ route('admin.viewers.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
        Add Viewer
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="min-w-full bg-white shadow rounded">
    <thead>
        <tr class="border-b">
            <th class="p-3 text-left">ID</th>
            <th class="p-3 text-left">First Name</th>
            <th class="p-3 text-left">Last Name</th>
            <th class="p-3 text-left">Street</th>
            <th class="p-3 text-left">City</th>
            <th class="p-3 text-left">ZIP</th>
            <th class="p-3 text-left">Account Date</th>
            <th class="p-3 text-left">Monthly Charge</th>
            <th class="p-3 text-left">Country</th>
        </tr>
    </thead>

    <tbody>
        @foreach($viewers as $viewer)
        <tr class="border-b hover:bg-gray-50">
            <td class="p-3">{{ $viewer->View_ID }}</td>
            <td class="p-3">{{ $viewer->F_Name }}</td>
            <td class="p-3">{{ $viewer->L_Name }}</td>
            <td class="p-3">{{ $viewer->Street }}</td>
            <td class="p-3">{{ $viewer->City }}</td>
            <td class="p-3">{{ $viewer->ZIP }}</td>
            <td class="p-3">{{ $viewer->Acc_date }}</td>
            <td class="p-3">${{ number_format($viewer->Monthly_Charge, 2) }}</td>
            <td class="p-3">{{ $viewer->country->Country ?? 'N/A' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $viewers->links() }}
</div>
@endsection
