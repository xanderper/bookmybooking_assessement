@extends('layouts.layouts')

@section('content')
    <div class="container custom_container client_container">

{{--        <h1 class="h2 mb-4">Single room</h1>--}}

        <div class="custom_box card-client-details">

            <div class="flex justify-between items-center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3 ">
                <div class="flex justify-center items-center icon_title__container">
                    <i class="fa-regular fa-user text-primary lead pe-1 me-2 flex justify-center items-center "></i>
                    <h2 class="h4 mb-0">Room</h2>
                </div>

                <div class="flex gap-2 btn__container">
                    <!-- Delete Button -->
                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this client?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="custom__delete flex justify-center items-center ml-auto custom__btn">
                            <i class="bi bi-trash mr-2"></i>
                            Delete
                        </button>
                    </form>

                    <!-- Edit Button -->
                    <a href="{{ route('rooms.edit', $room->id) }}" class="ml-auto custom__btn">
                        <i class="bi bi-pencil mr-2"></i>
                        Edit info
                    </a>
                </div>
            </div>

            <div class="row py-4 mb-2 sm:mb-3">
                <div class="grid md:grid-cols-3 mb-4 md:mb-0">
                    <table class="table mb-0">
                        <tbody>
                        <tr>
                            <td class="border-0 py-1 px-0 custom__secondary">Kamer naam</td>
                            <td class="border-0 fw-medium py-1 ps-3">{{ $room->name }}</td>
                        </tr>
                        <tr>
                            <td class="border-0 py-1 px-0 custom__secondary">Kamer m2</td>
                            <td class="border-0 fw-medium py-1 ps-3">{{ $room->area }}</td>
                        </tr>
                        <tr>
                            <td class="border-0 py-1 px-0 custom__secondary">Kamer Prijs</td>
                            <td class="border-0 fw-medium py-1 ps-3">{{ $room->price }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
