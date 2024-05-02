<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;



Route::resource('clients', ClientController::class);
Route::resource('properties', PropertyController::class);
Route::resource('rooms', RoomController::class);

Route::get('/', [ClientController::class, 'index']);                                                                        // list of all clients
Route::get('/clients/{id}', [ClientController::class, 'show']);                                                             // show a single client
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');                           // show the form to create a new client
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');                                   // store the new client in the database
Route::get('/clients/{clientId}/properties', [ClientController::class, 'properties'])->name('clients.properties');    // Show all properties for a client
Route::get('/properties/create/{clientId}', [PropertyController::class, 'create'])->name('properties.create');        // show the form to create a new property
Route::post('/properties/create', [PropertyController::class, 'store'])->name('properties.store');                    // store the new property in the database
Route::get('/properties/{propertyId}', [PropertyController::class, 'show'])->name('properties.show');                 // show a single property
Route::get('/properties/{propertyId}/rooms', [PropertyController::class, 'rooms'])->name('properties.rooms');         // show all the rooms of a property
Route::get('/room/{roomid}', [RoomController::class, 'show'])->name('rooms.show');                                    // show a single room



Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit'); // Show the form for editing a client
Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update'); // Update the specified client
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy'); // Delete the specified client


Route::get('/properties/{property}/edit', [PropertyController::class, 'edit'])->name('properties.edit'); // Show the form for editing a property
Route::put('/properties/{property}', [PropertyController::class, 'update'])->name('properties.update'); // Update the specified property
Route::delete('/properties/{property}', [PropertyController::class, 'destroy'])->name('properties.destroy'); // Delete the specified property


Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])->name('rooms.edit'); // Show the form for editing a room
Route::put('/rooms/{room}', [RoomController::class, 'update'])->name('rooms.update'); // Update the specified room
Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy'); // Delete the specified room


Route::get('/rooms/create/{propertyId}', [RoomController::class, 'create'])->name('rooms.create'); // Show the form for creating a new room
Route::post('/rooms/create', [RoomController::class, 'store'])->name('rooms.store'); // Store a newly created room
