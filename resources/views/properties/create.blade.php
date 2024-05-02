<!-- resources/views/properties/create.blade.php -->

@extends('layouts.layouts')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Property</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('properties.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="street" class="form-label">Street</label>
                                <input type="text" class="form-control" id="street" name="street" required>
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>

                            <input type="hidden" name="client_id" value="{{ $clientId }}">


                            <div class="mb-3">
                                <label for="postcode" class="form-label">Postcode</label>
                                <input type="text" class="form-control" id="postcode" name="postcode" required>
                            </div>

                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" required>
                            </div>

                            <!-- Add more fields as needed -->

                            <button type="submit" class="btn btn-primary">Save Property</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
