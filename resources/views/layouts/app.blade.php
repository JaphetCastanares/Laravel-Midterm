<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHIL MIAS | Intramurals Application</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>PHIL MIAS | Sports</h1>
    <div class="button-container">
        <a href="{{ route('home') }}" class="button">Home</a>
        <a href="{{ route('join') }}" class="button">Join Now</a>
    </div>

    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Phil Mias Intramurals Application by Japhet Castanares</p>
    </footer>
</body>
</html>
