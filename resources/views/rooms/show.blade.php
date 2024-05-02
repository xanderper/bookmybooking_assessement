@extends('layouts.layouts')

@section('content')
    <div class="container custom_container client_container">

        <h1 class="h2 mb-4">Single room</h1>

        <div class="custom_box card-client-details">
            <div class="flex items-center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3 ">
                <i class="fa-regular fa-user text-primary lead pe-1 me-2 "></i>
                <h2 class="h4 mb-0">Room Info</h2>
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
