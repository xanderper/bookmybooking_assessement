@extends('layouts.layouts')

@section('content')
    <div class="container custom_container client_container">
        <div class="custom_box card-client-details">
            <div class="flex justify-between items-center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3 ">
                <div class="flex justify-center items-center icon_title__container">
                    <i class="fa-regular fa-user text-primary lead pe-1 me-2 flex justify-center items-center "></i>
                    <h2 class="h4 mb-0">Property</h2>
                </div>

                <div class="flex gap-2 btn__container">
                    <!-- Delete Button -->
                    <form action="{{ route('properties.destroy', $property->id) }}" method="POST"
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
                    <a href="{{ route('properties.edit', $property->id) }}" class="ml-auto custom__btn">
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


        {{-- stats--}}
        <div class="custom_box stats-container">
            <div class="flex items
            -center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3">
                <i class="fa-regular fa-chart-bar pe-1 me-2"></i>
                <h2 class="h4 mb-0">Stats</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 gap-4">
                <div class="">
                    <div class="h-full bg-neutral-200 rounded-xl text-center p-4">
                        <h2 class="h6 pb-2 mb-1">Opbrengsten van huis</h2>
                        <div class="h2 text-primary mb-2">€ 842.00</div>
                    </div>
                </div>
                <div class=" ">
                    <div class="h-full bg-neutral-200 rounded-xl text-center p-4">
                        <h2 class="h6 pb-2 mb-1">-----</h2>
                        <div class="h2 text-primary mb-2">€ -----</div>
                    </div>
                </div>
                <div class=" ">
                    <div class="h-full bg-neutral-200 rounded-xl text-center p-4">
                        <h2 class="h6 pb-2 mb-1">-----</h2>
                        <div class="h2 text-primary mb-2">€ -----</div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Rooms --}}
        <div class="custom_box rooms-container">
            <div class="flex items-center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3">
                <i class="fa-solid fa-location-dot pe-1 me-2"></i>
                <h2 class="h4 mb-0">Rooms</h2>
                <a class=" custom__btn ms-auto" href="{{ route('properties.rooms', $property->id) }}">View all</a>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($property->rooms as $room)
                    <a href="{{ route('rooms.show', $room->id) }}">
                        <div class="col">
                            <div class="custom_property_card h-full p-3 sm:p-4">
                                <div class="flex align-center pb-2 mb-1">
                                    <h3 class="h6 text-nowrap text-truncate mb-0">{{ $room->name }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="col">
                    <div class="flex custom_property_card h-full align-center py-5 px-3 sm:px-4 ">
                        <a class="stretched-link flex align-center fw-semibold text-decoration-none m-auto"
                           href=" {{ route('rooms.create', $property->id ) }} " data-bs-toggle="modal"
                           data-bs-target="#addRoomModal">
                            <i class="bi bi-plus fs-xl me-2"></i>
                            Add new Room
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
