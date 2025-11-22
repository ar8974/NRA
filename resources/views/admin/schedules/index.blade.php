@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Schedules</h1>
    <a href="{{ route('admin.schedules.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">Add Schedule</a>
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
            <th class="p-3 text-left">Episode</th>
            <th class="p-3 text-left">Air Date</th>
            <th class="p-3 text-left">Duration</th>
            <th class="p-3 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($schedules as $schedule)
        <tr class="border-b hover:bg-gray-50">
            <td class="p-3">{{ $schedule->Schedule_ID }}</td>
            <td class="p-3">{{ $schedule->episode->Title ?? 'N/A' }}</td>
            <td class="p-3">{{ $schedule->Ep_Start }}</td>
            <td class="p-3">
                {{ \Carbon\Carbon::parse($schedule->Ep_Start)
                    ->diffInMinutes(\Carbon\Carbon::parse($schedule->Ep_End)) }} min
            </td>
            <td class="p-3 flex gap-2">
                <a href="{{ route('admin.schedules.show', $schedule) }}" class="text-blue-600">View</a>
                <a href="{{ route('admin.schedules.edit', $schedule) }}" class="text-yellow-600">Edit</a>
                <form action="{{ route('admin.schedules.destroy', $schedule) }}" method="POST"
                      onsubmit="return confirm('Delete this schedule?')">
                    @csrf @method('DELETE')
                    <button class="text-red-600">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $schedules->links() }}
</div>
@endsection
