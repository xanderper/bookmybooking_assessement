@extends('layouts.layouts')

@section('content')
    <div class="container custom_container properties_container">
        <div class="custom_box properties-container">
            <div class="flex items-center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3">
                <i class="fa-solid fa-location-dot pe-1 me-2"></i>
                <h2 class="h4 mb-0">Property overview</h2>
                <a href="{{ route('clients.edit', $client->id) }}" class="ml-auto custom__btn">
                    <i class="bi bi-pencil mr-2"></i>
                    Edit info
                </a>
            </div>

            {{-- Properties --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
{{--                @foreach($client->properties as $property)--}}
                    @foreach($properties as $property)

                    <a href="{{ route('properties.show', $property->id) }}">
{{--                    <a href="{{ $property->id }}">--}}
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
                                {{--                            <p class="mb-0">314 Robinson Lane,<br>Wilmington, DE 19805,</p>--}}
                            </div>
                        </div>
                    </a>
                @endforeach


                <div class="col">
                    <div class="flex custom_property_card h-full align-center py-5 px-3 sm:px-4 ">
                        <a class="stretched-link flex align-center fw-semibold text-decoration-none m-auto"
                           href=" {{ route('properties.create') }} " data-bs-toggle="modal">
                            <i class="bi bi-plus fs-xl me-2"></i>
                            Add new address
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
