<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    // Edit participant
    public function edit($id)
    {
        $participant = Participant::findOrFail($id);
        return view('participants.edit', compact('participant'));
    }

    // Update participant
    public function update(Request $request, $id)
    {
        $participant = Participant::findOrFail($id);

        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year' => 'required|integer|min:1',
        ]);

        // Update participant's details
        $participant->update($request->all());

        return redirect()->route('sports')->with('success', 'Participant updated successfully.');
    }

    // Delete participant
    public function destroy($id)
    {
        $participant = Participant::find($id);
        $sport = $participant->sport;
    
        // Delete the participant
        $participant->delete();
    
        // Update the current_participants count
        $sport->current_participants = $sport->participants()->count();
        $sport->save();
    
        return redirect()->route('sports');
    }
    
}
