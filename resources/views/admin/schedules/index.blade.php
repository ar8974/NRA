@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4 mb-0">Schedules</h1>

    <a href="{{ route('admin.schedules.create') }}" class="btn btn-primary">Add Schedule</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Episode</th>
                <th>Air Date</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schedules as $schedule)
            <tr>
                <td>{{ $schedule->Schedule_ID }}</td>
                <td>{{ $schedule->episode->Title ?? 'N/A' }}</td>
                <td>{{ $schedule->Ep_Start }}</td>
                <td>
                    {{ \Carbon\Carbon::parse($schedule->Ep_Start)
                        ->diffInMinutes(\Carbon\Carbon::parse($schedule->Ep_End)) }} min
                </td>
                <td class="text-nowrap">
                    <a href="{{ route('admin.schedules.show', $schedule) }}" class="btn btn-sm btn-outline-primary">View</a>
                    <a href="{{ route('admin.schedules.edit', $schedule) }}" class="btn btn-sm btn-warning text-white">Edit</a>

                    <form action="{{ route('admin.schedules.destroy', $schedule) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete this schedule?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $schedules->links('pagination::bootstrap-5') }}
</div>

@endsection
