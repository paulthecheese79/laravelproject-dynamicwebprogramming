<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>

    <!-- Example CSS link (adjust as needed) -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Optional: Include Bootstrap or Tailwind from CDN if needed -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a> |
            <a href="/games">Games</a>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My Laravel App</p>
    </footer>

    <!-- Example JS link (adjust as needed) -->
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- Optional: Bootstrap JS or other frameworks --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>
</html>
