@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Edit Schedule</h1>

    <form action="{{ route('admin.schedules.update', $schedule) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium">Episode</label>
            <select name="Ep_ID" class="border p-2 w-full rounded" required>
                <option value="">-- Select Episode --</option>
                @foreach($episodes as $ep)
                    <option value="{{ $ep->Ep_ID }}" @selected(old('Ep_ID', $schedule->Ep_ID) == $ep->Ep_ID)>
                        {{ $ep->Title }} ({{ $ep->webseries->Name ?? 'N/A' }})
                    </option>
                @endforeach
            </select>
            @error('Ep_ID')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Start Date & Time</label>
            <input type="datetime-local" name="Ep_Start" value="{{ old('Ep_Start', $schedule->Ep_Start) }}" class="border p-2 w-full rounded" required>
            @error('Ep_Start')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">End Date & Time</label>
            <input type="datetime-local" name="Ep_End" value="{{ old('Ep_End', $schedule->Ep_End) }}" class="border p-2 w-full rounded" required>
            @error('Ep_End')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Technical Interrupt</label>
            <select name="Tech_Interrupt" class="border p-2 w-full rounded" required>
                <option value="YES" @selected(old('Tech_Interrupt', $schedule->Tech_Interrupt) == 'YES')>YES</option>
                <option value="NO" @selected(old('Tech_Interrupt', $schedule->Tech_Interrupt) == 'NO')>NO</option>
            </select>
            @error('Tech_Interrupt')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Viewers</label>
            <input type="number" name="Viewers" value="{{ old('Viewers', $schedule->Viewers) }}" min="0" class="border p-2 w-full rounded" required>
            @error('Viewers')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Schedule</button>
            <a href="{{ route('admin.schedules.index') }}" class="px-4 py-2 rounded border">Cancel</a>
        </div>
    </form>
</div>
@endsection
