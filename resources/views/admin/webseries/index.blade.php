@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Web Series</h1>

<a href="{{ route('admin.webseries.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
    Add New Web Series
</a>

<table class="table-auto w-full mt-4 border">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Genre</th>
            <th class="px-4 py-2">Production House</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($webseries as $w)
        <tr>
            <td class="border px-4 py-2">{{ $w->Series_ID }}</td>
            <td class="border px-4 py-2">{{ $w->Name }}</td>

            {{-- show genres as comma-separated or badges --}}
            <td class="border px-4 py-2">
                @if($w->genres->isNotEmpty())
                    @foreach($w->genres as $g)
                        <span class="inline-block text-sm px-2 py-1 mr-1 rounded bg-gray-100 border">{{ $g->Name }}</span>
                    @endforeach
                @else
                    <span class="text-gray-500">—</span>
                @endif
            </td>

            <td class="border px-4 py-2">{{ $w->prodhouse->Name ?? 'N/A' }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('admin.webseries.show', $w->Series_ID) }}" class="text-blue-500">View</a> |
                <a href="{{ route('admin.webseries.edit', $w->Series_ID) }}" class="text-green-500">Edit</a> |
                <form action="{{ route('admin.webseries.destroy', $w->Series_ID) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button class="text-red-500" onclick="return confirm('Delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $webseries->links() }}
</div>
@endsection
