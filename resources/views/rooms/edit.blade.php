{{--
@extends('layouts.layouts')

@section('content')
    <div class="container custom_container room_container">

        <h1 class="h2 mb-4">Edit Room</h1>

        <div class="custom_box card-room-details">

            <form action="{{ route('rooms.update', $room->id) }}" method="POST">
                @csrf
                @method('PUT')



                <div class="mb-3">
                    <label for="name" class="form-label">Room Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $room->name }}">
                </div>

                <div class="mb-3">
                    <label for="area" class="form-label">Area</label>
                    <input type="text" class="form-control" id="area" name="area" value="{{ $room->area }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $room->price }}">
                </div>

                <!-- Add more fields as needed -->

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>

        </div>

    </div>
@endsection
--}}

@extends('layouts.layouts')

@section('content')
    <div class="container custom_container room_container">

{{--        <h1 class="text-2xl font-bold mb-6">Edit Room</h1>--}}

        <div class="custom_box card-room-details bg-white rounded-lg p-8 shadow-md">

            <form action="{{ route('rooms.update', $room->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Room Name</label>
                    <input type="text" id="name" name="name" value="{{ $room->name }}"
                           class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                        <label for="area" class="block text-gray-700 font-bold mb-2">Area</label>
                        <input type="text" id="area" name="area" value="{{ $room->area }}"
                               class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="w-full md:w-1/2 px-4">
                        <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
                        <input type="text" id="price" name="price" value="{{ $room->price }}"
                               class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                </div>

                <!-- Add more fields as needed -->

                <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                    Save Changes
                </button>
            </form>

        </div>

    </div>
@endsection

