<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'MyFlix' }}</title>

        <!-- Bootstrap CSS (CDN) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Project uniform overrides (served from public/) -->
        <link href="/css/app-uniform.css" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-black text-white">

        @include('components.navbar')

        <main class="pt-20">
            @yield('content')
        </main>

    </body>
    <!-- Bootstrap JS bundle (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoY9DkM4z2Z2a2Q5c5f5g5h5i5j5k5l5m5n5o5p5q5r5s5t" crossorigin="anonymous"></script>
    </html>
</div>
