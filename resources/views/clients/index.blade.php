@extends('layouts.layouts')

@section('content')
    <div class="container custom_container client_container">
        <div class="custom_box clients-container">
            <div class="flex items-center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3">
                <i class="fa-solid fa-location-dot pe-1 me-2"></i>
                <h2 class="h4 mb-0">Clients</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($clients as $client)
                    <a href="{{ route('clients.show', $client->id) }}">
                        <div class="col">
                            <div class="custom_property_card h-full p-3 sm:p-4">
                                <div class="flex align-center pb-2 mb-1">
                                    <h3 class="h6 text-nowrap text-truncate mb-0">{{ $client->name }}</h3>
                                </div>


                                <div class="flex align-center text-xs">
                                    <i class="bi bi-envelope me-6"></i>
                                    <p class="mb-0">{{ $client->email }}</p>
                                </div>

                                <div class="flex align-center text-xs">
                                    <i class="bi bi-telephone me-6"></i>
                                    <p class="mb-0">{{ $client->phone }}</p>
                                </div>

                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="col">
                    <div class="flex custom_property_card h-full align-center py-5 px-3 sm:px-4 ">
                        <a class="stretched-link flex align-center fw-semibold text-decoration-none m-auto"
                           href=" {{ route('clients.create') }} " data-bs-toggle="modal" data-bs-target="#addClientModal">
                            <i class="bi bi-plus fs-xl me-2"></i>
                            Add new Client
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
