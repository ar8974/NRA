@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Dub</h1>

    <form action="{{ route('admin.dub.update', $dub) }}" method="POST" class="space-y-4 bg-white p-4 shadow rounded">
        @csrf
        @method('PUT')
        <div>
            <label class="block mb-1">Episode ID</label>
            <input type="number" name="Ep_ID" value="{{ $dub->Ep_ID }}" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block mb-1">Language</label>
            <input type="text" name="Language" value="{{ $dub->Language }}" class="w-full border p-2 rounded" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Dub</button>
    </form>
</div>
@endsection
