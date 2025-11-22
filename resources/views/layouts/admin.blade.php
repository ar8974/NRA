<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Admin - NRA</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="flex min-h-screen">
    <aside class="w-64 bg-white border-r p-6">
      <a href="{{ route('admin.dashboard') }}" class="text-2xl font-bold block mb-6">NRA Admin</a>
      <nav class="space-y-2 text-sm">
        <a href="{{ route('admin.countries.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Countries</a>
        <a href="{{ route('admin.genres.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Genres</a>
        <a href="{{ route('admin.producers.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Producers</a>
        <a href="{{ route('admin.prodhouses.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Production Houses</a>
        <a href="{{ route('admin.webseries.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Webseries</a>
        <a href="{{ route('admin.episodes.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Episodes</a>
        <a href="{{ route('admin.viewers.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Viewers</a>
        <a href="{{ route('admin.schedules.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Schedules</a>
        <a href="{{ route('admin.contracts.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Contracts</a>
        <a href="{{ route('admin.feedback.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Feedback</a>
      </nav>
    </aside>

    <main class="flex-1 p-6">
      @if(session('success'))
        <div class="mb-4 text-green-700 bg-green-100 p-3 rounded">{{ session('success') }}</div>
      @endif

      @yield('content')
    </main>
  </div>
</body>
</html>
