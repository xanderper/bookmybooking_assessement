@extends('layouts.layouts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb-4">All Clients</h1>
            </div>
            <div class="col text-right">
                <a href="{{ route('clients.create') }}" class="btn btn-primary">Add Client</a>
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


