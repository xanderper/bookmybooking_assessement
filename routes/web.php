<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clients', ClientController::class);




//Route::get('/clients', function () {
//    return view('clients.index' , // clientcontroller index method
//    ['clients' => App\Models\Client::all()
//    ]);
//});

// Path: routes/web.php
// make the following route. to the /clients and give it the method of index from the clientcontroller
 Route::get('/clients', [ClientController::class, 'index']);
 Route::get('/clients/{id}', [ClientController::class, 'show']);
