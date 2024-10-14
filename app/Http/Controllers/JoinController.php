<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;
use App\Models\Participant;


class JoinController extends Controller
{
    //

public function create()
{
    $sports = Sport::whereColumn('current_participants', '<', 'max_participants')->get();
    return view('join', compact('sports'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'course' => 'required|string|max:255',
        'year' => 'required|string|max:4',
        'sport_id' => 'required|exists:sports,id',
    ]);

    $sport = Sport::find($validated['sport_id']);
    if ($sport->current_participants >= $sport->max_participants) {
        return redirect()->back()->with('error', 'Sport is already full.');
    }

    Participant::create($validated);
    $sport->increment('current_participants');

    return redirect()->route('sports')->with('success', 'You have successfully joined!');
}

}
