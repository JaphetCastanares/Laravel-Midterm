<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phil Mias</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <h1>PHIL MIAS | Intramurals Registration</h1>
        <p>Designed for registration and application convenience.</p>
    </header>

    <main class="container">
        <section class="gradient-bg">
            <h2>Welcome!</h2>
            <p>This is the home of our sports community. Join us for exciting events!</p>
            <a href="{{ route('join') }}" class="button">Join Now</a>
            <a href="{{ route('sports') }}" class="button">Check Sports</a>
        </section>

        <section class="section">
            <h2>Latest Updates</h2>
            <p>Stay tuned for the latest news and updates about our intramural events.</p>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </footer>

</body>
</html>
