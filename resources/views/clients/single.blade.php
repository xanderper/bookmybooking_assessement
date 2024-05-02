@extends('layouts.layouts')

@section('content')
    <div class="container custom_container client_container">

        <h1 class="h2 mb-4">Overview</h1>

        <div class="custom_box card-client-details">
            <div class="flex items-center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3 ">
                <i class="fa-regular fa-user text-primary lead pe-1 me-2 "></i>
                <h2 class="h4 mb-0">Basic info</h2>
                <a href="{{ route('clients.edit', $client->id) }}" class="ml-auto custom__btn">
                    <i class="bi bi-pencil mr-2"></i>
                    Edit info
                </a>

            </div>
            <div class="sm:flex items-center">
                <div class="pt-3 sm:pt-0">
                    <h3 class="h5 mb-2">{{ $client->name }}
                    </h3>
                    <div class="text-body-secondary fw-medium flex flex-wrap sm:flex-nowrap items-center">
                        <div class="flex items-center me-3 custom__secondary">
                            <i class="fa-regular fa-envelope me-1"></i>
                            {{ $client->email }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-4 mb-2 sm:mb-3">
                <div class="grid md:grid-cols-3 mb-4 md:mb-0">
                    <table class="table mb-0">
                        <tbody>
                        <tr>
                            <td class="border-0 py-1 px-0 custom__secondary">Phone</td>
                            <td class="border-0 fw-medium py-1 ps-3">{{ $client->phone }}</td>
                        </tr>
                        <tr>
                            <td class="border-0 py-1 px-0 custom__secondary">Language</td>
                            <td class="border-0 fw-medium py-1 ps-3">English</td>
                        </tr>
                        <tr>
                            <td class="border-0 py-1 px-0 custom__secondary">Communication</td>
                            <td class="border-0 fw-medium py-1 ps-3">Mobile, email</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        <div class="custom_box properties-container">
            <div class="flex items-center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3">
                <i class="fa-solid fa-location-dot pe-1 me-2"></i>
                <h2 class="h4 mb-0">Properties</h2>
                <a class=" custom__btn ms-auto" href="{{ route('clients.properties', $client->id) }}">View all</a>

            </div>


            {{-- Properties --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($client->properties as $property)

                    <a href="{{ route('properties.show', $property->id) }}">
                    <div class="col">
                        <div class="custom_property_card h-full p-3 sm:p-4">
                            <div class="flex align-center pb-2 mb-1">
                                <h3 class="h6 text-nowrap text-truncate mb-0">Property #{{ $property->id }}</h3>
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
                            <p class="mb-0">{{ $property->street }}, {{ $property->postcode  }},<br>{{ $property->country }}, {{ $property->city  }},</p>
                        </div>
                    </div>
                    </a>
                @endforeach


                <div class="col">
                    <div class="flex custom_property_card h-full align-center py-5 px-3 sm:px-4 ">
                        <a class="stretched-link flex align-center fw-semibold text-decoration-none m-auto"
{{--                           href="{{ route('properties.create', ['clientId' => [$property->id ]) }}" data-bs-toggle="modal">--}}
                            href="{{ route('properties.create', ['clientId' => $client->id]) }}" data-bs-toggle="modal">
{{--                            {{ route('properties.create', [$property->id ]) }}--}}
                            <i class="bi bi-plus fs-xl me-2"></i>
                            Add new address
                        </a>

                    </div>
                </div>
            </div>
        </div>
@endsection
