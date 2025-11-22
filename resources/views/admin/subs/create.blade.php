@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Add Subtitle</h1>

<form method="POST" action="{{ route('admin.subs.store') }}" class="space-y-4">
    @csrf

    <div>
        <label class="block font-semibold">Language</label>
        <input type="text" name="Language" class="w-full border p-2 rounded">
    </div>

    <div>
        <label class="block font-semibold">Type</label>
        <input type="text" name="Type" class="w-full border p-2 rounded" placeholder="SRT, VTT">
    </div>

    <div>
        <label class="block font-semibold">File URL</label>
        <input type="text" name="File_URL" class="w-full border p-2 rounded" placeholder="https://...">
    </div>

    <div>
        <label class="block font-semibold">Episode</label>
        <select name="Episode_ID" class="w-full border p-2 rounded">
            @foreach($episodes as $ep)
                <option value="{{ $ep->Episode_ID }}">
                    {{ $ep->Episode_Name }} (Series: {{ $ep->Webseries_ID }})
                </option>
            @endforeach
        </select>
    </div>

    <button class="bg-green-600 text-white px-4 py-2 rounded">Save</button>
</form>
@endsection
