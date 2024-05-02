{{--
@extends('layouts.layouts')

@section('content')
    <div class="container">
        <h1>Edit Property</h1>
        <form method="POST" action="{{ route('properties.update', $property->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="street">Street:</label>
                <input type="text" class="form-control" id="street" name="street" value="{{ $property->street }}">
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $property->city }}">
            </div>
            <div class="form-group">
                <label for="postcode">Postcode:</label>
                <input type="text" class="form-control" id="postcode" name="postcode" value="{{ $property->postcode }}">
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" id="country" name="country" value="{{ $property->country }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
--}}


@extends('layouts.layouts')

@section('content')
    <div class="container custom_container">
        <h1 class="text-2xl font-bold mb-6">Edit Property</h1>
        <div class="custom_box bg-white rounded-lg p-8 shadow-md">

            <form method="POST" action="{{ route('properties.update', $property->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="street" class="block text-gray-700 font-bold mb-2">Street:</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="street" name="street" value="{{ $property->street }}">
                </div>

                <div class="mb-6">
                    <label for="city" class="block text-gray-700 font-bold mb-2">City:</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="city" name="city" value="{{ $property->city }}">
                </div>

                <div class="mb-6">
                    <label for="postcode" class="block text-gray-700 font-bold mb-2">Postcode:</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="postcode" name="postcode" value="{{ $property->postcode }}">
                </div>

                <div class="mb-6">
                    <label for="country" class="block text-gray-700 font-bold mb-2">Country:</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="country" name="country" value="{{ $property->country }}">
                </div>

                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update
                </button>
            </form>
        </div>
    </div>
@endsection
