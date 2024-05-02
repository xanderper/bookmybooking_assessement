{{--
<!-- resources/views/properties/create.blade.php -->

@extends('layouts.layouts')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Property</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('properties.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="street" class="form-label">Street</label>
                                <input type="text" class="form-control" id="street" name="street" required>
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>

                            <input type="hidden" name="client_id" value="{{ $clientId }}">


                            <div class="mb-3">
                                <label for="postcode" class="form-label">Postcode</label>
                                <input type="text" class="form-control" id="postcode" name="postcode" required>
                            </div>

                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" required>
                            </div>

                            <!-- Add more fields as needed -->

                            <button type="submit" class="btn btn-primary">Save Property</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
--}}

<!-- resources/views/properties/create.blade.php -->

@extends('layouts.layouts')

@section('content')
    <div class="container custom_container client_container">
        <div class="custom_box bg-white rounded-lg p-8 shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Create New Property</h2>

                <form method="POST" action="{{ route('properties.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="street" class="block text-gray-700 font-bold mb-2">Street</label>
                        <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="street" name="street" required>
                    </div>

                    <div class="mb-4">
                        <label for="city" class="block text-gray-700 font-bold mb-2">City</label>
                        <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="city" name="city" required>
                    </div>

                    <input type="hidden" name="client_id" value="{{ $clientId }}">

                    <div class="mb-4">
                        <label for="postcode" class="block text-gray-700 font-bold mb-2">Postcode</label>
                        <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="postcode" name="postcode" required>
                    </div>

                    <div class="mb-4">
                        <label for="country" class="block text-gray-700 font-bold mb-2">Country</label>
                        <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="country" name="country" required>
                    </div>

                    <!-- Add more fields as needed -->

                    <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Save Property
                    </button>
                </form>
            </div>
    </div>
@endsection
