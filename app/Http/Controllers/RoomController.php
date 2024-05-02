<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new room.
     */
    public function create($propertyId)
    {
        // Return the view with the form for creating a new room
        return view('rooms.create', ['propertyId' => $propertyId]);
    }

    /**
     * Store a newly created room in storage.
     */
    public function store(Request $request, $propertyId)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'area' => 'required|numeric',
            'price' => 'required|numeric',
            // Add more validation rules as needed
        ]);

        // Create the room associated with the given property
        $room = new Room($validatedData);
        $room->property_id = $propertyId;
        $room->save();

        // Redirect the user to the property's rooms page
        return redirect()->route('properties.rooms', $propertyId);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

         $room = Room::findOrFail($id);
         return view('rooms.show', compact('room'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
