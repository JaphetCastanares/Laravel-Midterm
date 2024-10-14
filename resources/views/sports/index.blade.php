@extends('layouts.app')

@section('content')
    <h1>Available Sports</h1>
    @foreach ($sports as $sport)
    <div class="sport">
        <h2>{{ $sport->name }} ({{ $sport->participants->count() }}/{{ $sport->max_participants }})</h2>
        @if ($sport->participants->count() >= $sport->max_participants)
            <span class="full">Full</span>
        @else
            <span class="available">Available</span>
        @endif
            <h3>Participants:</h3>
            <ul class="unordered">
            @foreach ($sport->participants as $participant)
                    <li class="list">
                        {{ $participant->first_name }} {{ $participant->last_name }} 
                        ({{ $participant->course }} - {{ $participant->year }})
                        <!-- <div class="button-group">
                            <a href="{{ route('participants.edit', $participant->id) }}" class="button edit">Edit</a>

                            <form action="{{ route('participants.destroy', $participant->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button delete">Delete</button>
                            </form>
                        </div> -->
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>
@endsection
