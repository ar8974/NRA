@extends('layouts.admin')

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4 mb-0">Countries</h1>
    <a href="{{ route('admin.countries.create') }}" class="btn btn-primary">Add Country</a>
  </div>

  <div class="table-responsive bg-white shadow rounded">
    <table class="table table-striped table-bordered mb-0">
      <thead class="table-light">
        <tr>
          <th>Code</th>
          <th>Country</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($items as $c)
          <tr>
            <td>{{ $c->Country_Code }}</td>
            <td>{{ $c->Country }}</td>
            <td class="text-center">
              <a href="{{ route('admin.countries.edit', $c->Country_Code) }}" class="btn btn-sm btn-warning text-white">Edit</a>
              <form action="{{ route('admin.countries.destroy', $c->Country_Code) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button onclick="return confirm('Delete?')" class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="p-3">
      {{ $items->links('pagination::bootstrap-5') }}
    </div>
  </div>
@endsection
