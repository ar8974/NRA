@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 mb-0">Feedback</h1>
        <div></div>
</div>

@if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Viewer</th>
                        <th>Series</th>
                        <th>Rating</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedbacks as $f)
                    <tr>
                        <td>{{ $f->viewer->F_Name }} {{ $f->viewer->L_Name }}</td>
                        <td>{{ $f->series->Name }}</td>
                        <td>{{ $f->Rating }}</td>
                        <td>{{ Str::limit($f->Feedback_text, 50) }}</td>
                        <td>{{ $f->Feedback_date }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-3 d-flex justify-content-between align-items-center">
            <div class="text-muted">Showing {{ $feedbacks->firstItem() }} to {{ $feedbacks->lastItem() }} of {{ $feedbacks->total() }} results</div>
            <div>
                {{ $feedbacks->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

@endsection
