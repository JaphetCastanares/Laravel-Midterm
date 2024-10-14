@extends('layouts.app')

@section('content')
    
    <main class="container">
        <h1>Edit Participant</h1>
        <section class="gradient-bg2">
            <form action="{{ route('participants.update', $participant->id) }}" method="POST">
                @csrf
                @method('PUT')

                <label for="first_name">First Name</label>
                <input type="text" class="input-text" name="first_name" value="{{ $participant->first_name }}" required>

                <label for="last_name">Last Name</label>
                <input type="text" class="input-text" name="last_name" value="{{ $participant->last_name }}" required>

                <label for="course">Course</label>
                <input type="text" class="input-text" name="course" value="{{ $participant->course }}" required>

                <label for="year">Year</label>
                <input type="number" class="input-text" name="year" value="{{ $participant->year }}" required>

                <button type="submit" class="button">Update Participant</button>
            </form>
        </section>
    </main>
@endsection
