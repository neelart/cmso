<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMSO Admin - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <header>
        <h1><a href="{{ route('admin.pages.index') }}" style="color: #fff; text-decoration: none;">CMSO Admin</a></h1>
        <nav>
            <a href="{{ route('admin.pages.index') }}">Pages</a>
            <a href="{{ route('admin.settings.index') }}">Settings</a>
        </nav>
        <button id="theme-toggle-placeholder">Toggle Theme</button>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} CMSO</p>
    </footer>
</body>
</html>
