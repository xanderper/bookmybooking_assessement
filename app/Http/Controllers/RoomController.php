<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Property;
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
        return view('rooms.create', compact('propertyId'));
    }

    /**
     * Store a newly created room in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'property_id' => 'required|integer',
            'name' => 'required|string',
            'area' => 'required|numeric',
            'price' => 'required|numeric',
            // Add more validation rules as needed
        ]);


        $room = Room::create($validatedData);

        // Redirect the user to the property's rooms page
        return redirect()->route('rooms.show', $room->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $room = Room::findOrFail($id);
         return view('rooms.show', compact('room'));


    }



    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'area' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $room->update($validatedData);

        return redirect()->route('rooms.show', $room->id);
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('properties.rooms', $room->property_id); // Redirect to the property's rooms page or any other appropriate page
    }

}
