<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NRA Streaming</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white">
    <header class="bg-gray-800 p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">NRA Streaming</h1>
        <nav>
            <a href="{{ route('user.home') }}" class="px-4 hover:text-red-500">Home</a>
            <a href="{{ route('user.countries') }}" class="px-4 hover:text-red-500">Country</a>
        </nav>
    </header>

    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>
