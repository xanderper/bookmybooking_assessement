<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client; // Add this line to import the Client model
use App\Models\Property; // Add this line to import the Property model
use App\Models\Room; // Add this line to import the Rooms model


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all(); // Fetch all clients from the database
        return view('clients.index', ['clients' => $clients]);
    }


    public function properties($clientId)
    {
        $client = Client::find($clientId);
        $properties = $client->properties; // Assuming properties is the relationship method in your Client model
        return view('clients.properties', compact('client', 'properties'));
    }


//    public function show(string $id)
//    {
//        $client = Client::findOrFail($id);
//        return view('clients.show', compact('client'));
//    }


    public function show(string $id)
    {

        $client = Client::findOrFail($id);

        // Calculate total revenue
        $totalRevenue = Room::sum('price');

        return view('clients.show', compact('client', 'totalRevenue'));
    }





    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required|string|max:20',
        ]);

        Client::create($validatedData);

        return redirect()->route('clients.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $id,
            'phone' => 'required|string|max:20',
        ]);

        $client->update($validatedData);

        return redirect()->route('clients.show', $id)->with('success', 'Client updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }




//    /**
//     * Show the form for editing the specified resource.
//     */
//    public function edit(string $id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     */
//    public function update(Request $request, string $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     */
//    public function destroy(string $id)
//    {
//        //
//    }
}
