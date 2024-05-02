@extends('layouts.layouts')

@section('content')
    <div class="container custom_container client_container">
        <div class="custom_box bg-white rounded-lg p-8 shadow-md">
            <h2 class="text-2xl font-bold mb-6">Add New Client</h2>

            <form action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" required>
                </div>

                <div class="mb-6">
                    <label for="phone" class="block text-gray-700 font-bold mb-2">Phone:</label>
                    <input type="tel" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" name="phone" required>
                </div>

                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Save Client
                </button>
            </form>
        </div>
    </div>
@endsection
