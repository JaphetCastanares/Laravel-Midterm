<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <h1>PHIL MIAS | Join Us</h1>
        <a href="{{ route('home') }}" class="button">Home</a>
        <a href="{{ route('sports') }}" class="button">Check Sports</a>
    </header>

    <main class="container">
        <section class="gradient-bg2">
            <h2>Become a Member</h2>
            <p>Fill out the form below to join our intramural sports community:</p>
            <form action="{{ route('join') }}" method="POST">
                @csrf
                <input type="text" class="input-text" name="first_name" placeholder="First Name" required>
                <input type="text" class="input-text" name="last_name" placeholder="Last Name" required>
                <input type="text" class="input-text" name="course" placeholder="Course" required>
                <input type="number" class="input-text" name="year" placeholder="Year" required>
                <select name="sport_id" class="select-box" required>
                    <option value="" disabled selected>Select a sport</option>
                    @foreach($sports as $sport)
                        <option value="{{ $sport->id }}">{{ $sport->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="button">Join</button>
            </form>
            <br>
    </main>
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </footer>
</body>    

</html>
