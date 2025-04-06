<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller {
    // Show all events
    public function index() {
        $events = Event::all();
        return view('manageEvents', compact('events'));
    }

    // Store a new event
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
        ]);

        Event::create($request->all());

        return redirect()->back()->with('success', 'Event added successfully.');
    }

    // Delete an event
    public function destroy($id) {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->back()->with('success', 'Event deleted successfully.');
    }
}


