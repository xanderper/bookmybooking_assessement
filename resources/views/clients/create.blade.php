@extends('layouts.layouts')

@section('content')
    <div class="container custom_container client_container">
        <div class="custom_box">
            <h2 class="mb-4">Add New Client</h2>

            <form action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>

                <button type="submit" class="btn btn-primary">Save Client</button>
            </form>
        </div>
    </div>
@endsection
