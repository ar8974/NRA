@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Subtitle Details</h1>

<div class="bg-white shadow p-6 rounded space-y-3">
    <p><strong>ID:</strong> {{ $sub->Sub_ID }}</p>
    <p><strong>Language:</strong> {{ $sub->Language }}</p>
    <p><strong>Type:</strong> {{ $sub->Type }}</p>
    <p><strong>File URL:</strong> {{ $sub->File_URL }}</p>
    <p><strong>Episode:</strong> {{ $sub->episode->Episode_Name }}</p>
</div>

<a href="{{ route('admin.subs.index') }}" class="text-blue-600 mt-4 inline-block">Back</a>
@endsection
