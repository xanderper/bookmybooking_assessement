<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Client;

use Illuminate\Http\Request;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
            //
        }

    /**
     * Show the form for creating a new property.
     */
    public function create($clientId)
    {
        // Now you have the $clientId available to use when creating a new property
//        $client = Client::find($clientId);
        return view('properties.create', compact('clientId'));
    }

    /**
     * Store a newly created property in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'client_id' => 'required|integer',
            'street' => 'required|string',
            'city' => 'required|string',
            'postcode' => 'required|string',
            'country' => 'required|string',
            // Add more validation rules as needed
        ]);

        // Create the property
        $property = Property::create($validatedData);

        // Redirect the user to the property's show page
        return redirect()->route('properties.show', $property->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($propertyId)
    {
        $property = Property::findOrFail($propertyId);
        return view('properties.show', compact('property'));
    }



    // add a method to get all the rooms of a property
    public function rooms($propertyId)
    {
        $property = Property::findOrFail($propertyId);
        $rooms = $property->rooms;
        return view('properties.rooms', compact('property'));
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
