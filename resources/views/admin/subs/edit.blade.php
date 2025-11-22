@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Subtitle</h1>

<form method="POST" action="{{ route('admin.subs.update', $sub) }}" class="space-y-4">
    @csrf @method('PUT')

    <div>
        <label class="block font-semibold">Language</label>
        <input type="text" name="Language" value="{{ $sub->Language }}" class="w-full border p-2 rounded">
    </div>

    <div>
        <label class="block font-semibold">Type</label>
        <input type="text" name="Type" value="{{ $sub->Type }}" class="w-full border p-2 rounded">
    </div>

    <div>
        <label class="block font-semibold">File URL</label>
        <input type="text" name="File_URL" value="{{ $sub->File_URL }}" class="w-full border p-2 rounded">
    </div>

    <div>
        <label class="block font-semibold">Episode</label>
        <select name="Episode_ID" class="w-full border p-2 rounded">
            @foreach($episodes as $ep)
                <option value="{{ $ep->Episode_ID }}"
                    @selected($ep->Episode_ID == $sub->Episode_ID)>
                    {{ $ep->Episode_Name }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="bg-yellow-600 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
