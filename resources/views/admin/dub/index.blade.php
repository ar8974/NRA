@extends('admin.layouts.app')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Dubs</h1>
        <a href="{{ route('admin.dub.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Dub</a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-200 text-green-800 rounded">{{ session('success') }}</div>
    @endif

    <table class="min-w-full bg-white shadow rounded">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="p-2 border">Dub ID</th>
                <th class="p-2 border">Episode ID</th>
                <th class="p-2 border">Language</th>
                <th class="p-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dubs as $dub)
                <tr>
                    <td class="p-2 border">{{ $dub->Dub_ID }}</td>
                    <td class="p-2 border">{{ $dub->Ep_ID }}</td>
                    <td class="p-2 border">{{ $dub->Language }}</td>
                    <td class="p-2 border">
                        <a href="{{ route('admin.dub.edit', $dub) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('admin.dub.destroy', $dub) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $dubs->links() }}
    </div>
</div>
@endsection
