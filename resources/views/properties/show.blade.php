@extends('layouts.layouts')

@section('content')
    <div class="container custom_container client_container">

        <h1 class="h2 mb-4">Single property</h1>

        <div class="custom_box card-client-details">
            <div class="flex items-center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3 ">
                <i class="fa-regular fa-user text-primary lead pe-1 me-2 "></i>
                <h2 class="h4 mb-0">Property Info</h2>
            </div>
            <div class="row py-4 mb-2 sm:mb-3">
                <div class="grid md:grid-cols-3 mb-4 md:mb-0">
                    <table class="table mb-0">
                        <tbody>
                        <tr>
                            <td class="border-0 py-1 px-0 custom__secondary">Straat</td>
                            <td class="border-0 fw-medium py-1 ps-3">{{ $property->street }}</td>
                        </tr>
                        <tr>
                            <td class="border-0 py-1 px-0 custom__secondary">Stad</td>
                            <td class="border-0 fw-medium py-1 ps-3">{{ $property->city }}</td>
                        </tr>
                        <tr>
                            <td class="border-0 py-1 px-0 custom__secondary">Postcode</td>
                            <td class="border-0 fw-medium py-1 ps-3">{{ $property->postcode }}</td>
                        </tr>
                        <tr>
                            <td class="border-0 py-1 px-0 custom__secondary">Land</td>
                            <td class="border-0 fw-medium py-1 ps-3">{{ $property->country }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        <div class="custom_box rooms-container">
            <div class="flex items-center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3">
                <i class="fa-solid fa-location-dot pe-1 me-2"></i>
                <h2 class="h4 mb-0">Rooms</h2>
                <a class=" custom__btn ms-auto" href="{{ route('properties.rooms', $property->id) }}">View all</a>
            </div>


            {{-- Properties --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($property->rooms as $room)
                    <a href="{{ route('rooms.show', $room->id) }}">
{{--                    <a href="{{ $room->id }}">--}}
                        <div class="col">
                            <div class="custom_property_card h-full p-3 sm:p-4">
                                <div class="flex align-center pb-2 mb-1">
                                    <h3 class="h6 text-nowrap text-truncate mb-0">{{ $room->name }}</h3>
                                    <div class="d-flex ms-auto">
                                        <button class="nav-link fs-xl fw-normal py-1 pe-0 ps-1 ms-2" type="button"
                                                data-bs-toggle="tooltip" aria-label="Edit" data-bs-original-title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="nav-link text-danger fs-xl fw-normal py-1 pe-0 ps-1 ms-2"
                                                type="button" data-bs-toggle="tooltip" aria-label="Trash"
                                                data-bs-original-title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                {{--                            <p class="mb-0">314 Robinson Lane,<br>Wilmington, DE 19805,</p>--}}
                            </div>
                        </div>
                    </a>
                @endforeach

                <div class="col">
                    <div class="flex custom_property_card h-full align-center py-5 px-3 sm:px-4 ">
                        <a class="stretched-link flex align-center fw-semibold text-decoration-none m-auto"
                           href="#" data-bs-toggle="modal" data-bs-target="#addRoomModal">
{{--                            href=" {{ route('rooms.create') }} " data-bs-toggle="modal" data-bs-target="#addRoomModal">--}}
                            <i class="bi bi-plus fs-xl me-2"></i>
                            Add new Room
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
