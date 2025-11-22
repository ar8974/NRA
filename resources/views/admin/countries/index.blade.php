@extends('layouts.admin')

@section('content')
  <div class="flex items-center justify-between">
    <h1 class="text-2xl font-bold">Countries</h1>
    <a href="{{ route('admin.countries.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Country</a>
  </div>

  <div class="mt-4 bg-white shadow rounded">
    <table class="w-full text-sm">
      <thead class="bg-gray-50">
        <tr>
          <th class="p-3 text-left">Code</th>
          <th class="p-3 text-left">Country</th>
          <th class="p-3">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($items as $c)
          <tr class="border-t">
            <td class="p-3">{{ $c->Country_Code }}</td>
            <td class="p-3">{{ $c->Country }}</td>
            <td class="p-3 text-center">
              <a href="{{ route('admin.countries.edit', $c->Country_Code) }}" class="text-blue-600 mr-2">Edit</a>
              <form action="{{ route('admin.countries.destroy', $c->Country_Code) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button onclick="return confirm('Delete?')" class="text-red-600">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="p-4">
      {{ $items->links() }}
    </div>
  </div>
@endsection
