@extends('layouts.layouts')

@section('content')
    <div class="container custom_container room_container">
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

                <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                    Save Changes
                </button>
            </form>

        </div>

    </div>
@endsection

