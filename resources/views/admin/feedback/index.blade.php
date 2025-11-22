@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Feedback</h1>

@if(session('success'))
    <div class="mb-4 p-3 bg-green-200 text-green-800 rounded">{{ session('success') }}</div>
@endif

<table class="min-w-full bg-white border">
    <thead>
        <tr>
            <th class="border px-4 py-2">Viewer</th>
            <th class="border px-4 py-2">Series</th>
            <th class="border px-4 py-2">Rating</th>
            <th class="border px-4 py-2">Message</th>
            <th class="border px-4 py-2">Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($feedbacks as $f)
        <tr>
            <td class="border px-4 py-2">{{ $f->viewer->F_Name }} {{ $f->viewer->L_Name }}</td>
            <td class="border px-4 py-2">{{ $f->series->Name }}</td>
            <td class="border px-4 py-2">{{ $f->Rating }}</td>
            <td class="border px-4 py-2">{{ Str::limit($f->Feedback_text, 50) }}</td>
            <td class="border px-4 py-2">{{ $f->Feedback_date }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $feedbacks->links() }}
</div>
@endsection
