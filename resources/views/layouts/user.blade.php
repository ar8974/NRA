<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NRA Streaming</title>
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Project uniform overrides -->
    <link href="/css/app-uniform.css" rel="stylesheet">
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
<!-- Bootstrap JS bundle (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoY9DkM4z2Z2a2Q5c5f5g5h5i5j5k5l5m5n5o5p5q5r5s5t" crossorigin="anonymous"></script>
</html>
