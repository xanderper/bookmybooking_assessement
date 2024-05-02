{{--
<!-- resources/views/rooms/create.blade.php -->

@extends('layouts.layouts')

@section('content')
    <div class="container custom_container client_container">
        <div class="custom_box bg-white rounded-lg p-8 shadow-md">
            <h2 class="text-2xl font-bold mb-6">Add New room</h2>

        <form method="POST" action="{{ route('rooms.store') }}">
            @csrf

            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" required>
            </div>


            <input type="hidden" name="property_id" value="{{ $propertyId }}">

            <div class="form-group">
                <label for="area">Area:</label>
                <input type="text" class="form-control" id="area" name="area">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <!-- Add input fields for other room attributes as needed -->
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        </div>    </div>
@endsection

--}}


<!-- resources/views/rooms/create.blade.php -->

@extends('layouts.layouts')

@section('content')
    <div class="container custom_container client_container">
        <div class="custom_box bg-white rounded-lg p-8 shadow-md">
            <h2 class="text-2xl font-bold mb-6">Add New Room</h2>

            <form method="POST" action="{{ route('rooms.store') }}">
                @csrf

                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text"
                           class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="name" name="name" required>
                </div>

                <input type="hidden" name="property_id" value="{{ $propertyId }}">




                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                        <label for="area" class="block text-gray-700 font-bold mb-2">Area</label>
                        <input type="text" id="area" name="area"
                               class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full md:w-1/2 px-4">
                        <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
                        <input type="text" id="price" name="price"
                               class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                </div>
{{--

                <div class="mb-4">
                    <label for="area" class="block text-gray-700 font-bold mb-2">Area:</label>
                    <input type="text"
                           class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="area" name="area">
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
                    <input type="text"
                           class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="price" name="price">
                </div>
--}}

                <!-- Add input fields for other room attributes as needed -->

                <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                    Create
                </button>
            </form>
        </div>
    </div>
@endsection
