@extends('layouts.layouts')

@section('content')
    <div class="container client_container">

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
                <i class="fa-solid fa-cart-shopping pe-1 me-2"></i>
                <h2 class="h4 mb-0">Properties</h2>
                <a class=" custom__btn ms-auto" href="#">View all</a>
            </div>


            <div class="mx-auto mt-8 grid divide-y divide-neutral-200">
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> How does the billing work?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                     stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Springerdata offers a variety of
                            billing options, including monthly and annual subscription plans, as well as pay-as-you-go
                            pricing for certain services. Payment is typically made through a credit card or other
                            secure online payment method.
                        </p>
                    </details>
                </div>
            </div>

        </div>


        <div class="custom_box rooms-container">
            <div class="flex items-center sm:mt-n1 pb-4 mb-0 lg:mb-1 xl:mb-3">
                <i class="fa-solid fa-cart-shopping pe-1 me-2"></i>
                <h2 class="h4 mb-0">Rooms</h2>
                <a class=" custom__btn ms-auto" href="#">View all</a>
            </div>


            <div class="mx-auto mt-8 grid divide-y divide-neutral-200">
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> How does the billing work?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                     stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Springerdata offers a variety of
                            billing options, including monthly and annual subscription plans, as well as pay-as-you-go
                            pricing for certain services. Payment is typically made through a credit card or other
                            secure online payment method.
                        </p>
                    </details>
                </div>
            </div>

        </div>
    </div>
@endsection
