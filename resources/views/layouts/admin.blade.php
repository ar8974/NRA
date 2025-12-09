<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Admin - NRA</title>
  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Project uniform overrides -->
  <link href="/css/app-uniform.css" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class="bg-light text-body">
  <div class="container-fluid">
    <div class="row">
      <aside class="col-12 col-md-3 col-lg-2 bg-white border-end vh-100 p-4 admin-sidebar">
        <a href="{{ route('admin.dashboard') }}" class="h4 d-block mb-4 text-dark text-decoration-none">NRA Admin</a>
        <nav class="nav flex-column nav-pills">
          <a href="{{ route('admin.countries.index') }}" class="nav-link">Countries</a>
          <a href="{{ route('admin.genres.index') }}" class="nav-link">Genres</a>
          <a href="{{ route('admin.producers.index') }}" class="nav-link">Producers</a>
          <a href="{{ route('admin.prodhouses.index') }}" class="nav-link">Production Houses</a>
          <a href="{{ route('admin.webseries.index') }}" class="nav-link">Webseries</a>
          <a href="{{ route('admin.episodes.index') }}" class="nav-link">Episodes</a>
          <a href="{{ route('admin.viewers.index') }}" class="nav-link">Viewers</a>
          <a href="{{ route('admin.schedules.index') }}" class="nav-link">Schedules</a>
          <a href="{{ route('admin.contracts.index') }}" class="nav-link">Contracts</a>
          <a href="{{ route('admin.feedback.index') }}" class="nav-link">Feedback</a>
        </nav>
      </aside>

      <main class="col p-4">
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
      </main>
    </div>
  </div>
</body>
<!-- Bootstrap JS bundle (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
