@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Add New Contract</h1>

    <form action="{{ route('admin.contracts.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium">Select Series</label>
            <select name="Series_ID" class="border p-2 w-full rounded" required>
                <option value="">-- Choose Series --</option>
                @foreach($webseries as $series)
                    <option value="{{ $series->Series_ID }}" @selected(old('Series_ID') == $series->Series_ID)>
                        {{ $series->Name }}
                    </option>
                @endforeach
            </select>
            @error('Series_ID')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Start Date</label>
            <input type="date" name="Contract_date" value="{{ old('Contract_date') }}" class="border p-2 w-full rounded" required>
            @error('Contract_date')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">End Date</label>
            <input type="date" name="Contract_end" value="{{ old('Contract_end') }}" class="border p-2 w-full rounded" required>
            @error('Contract_end')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Charge per Episode</label>
            <input type="number" step="0.01" name="Charge_per_ep" value="{{ old('Charge_per_ep') }}" class="border p-2 w-full rounded" required>
            @error('Charge_per_ep')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Add Contract</button>
            <a href="{{ route('admin.contracts.index') }}" class="px-4 py-2 rounded border">Cancel</a>
        </div>
    </form>
</div>
@endsection
