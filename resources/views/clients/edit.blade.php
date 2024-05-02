{{--
@extends('layouts.layouts')

@section('content')
    <div class="container">
        <h1>Edit Client</h1>
        <form method="POST" action="{{ route('clients.update', $client->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
--}}


@extends('layouts.layouts')

@section('content')
    <div class="container custom_container">
        <h1 class="text-2xl font-bold mb-6">Edit Client</h1>
        <div class="custom_box bg-white rounded-lg p-8 shadow-md">

            <form method="POST" action="{{ route('clients.update', $client->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" value="{{ $client->name }}">
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" value="{{ $client->email }}">
                </div>

                <div class="mb-6">
                    <label for="phone" class="block text-gray-700 font-bold mb-2">Phone:</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" name="phone" value="{{ $client->phone }}">
                </div>

                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update
                </button>
            </form>
        </div>
    </div>
@endsection
