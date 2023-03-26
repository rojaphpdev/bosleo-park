@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Users</h1>
    <a class="btn btn-success" href="{{ url('/export') }}">Export</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->title }} {{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->street }} ,{{ $user->city }}, {{ $user->state }},  {{ $user->country }}, {{ $user->postcode }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td><img src="{{ $user->picture }}" alt="profile Pic" height="50" width="50"></td>
                        <td><a class="urlredirect" href="{{ url('/users/edit/'. $user->id) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-12 text-cemter">
            {{ $users->links() }}
        </div>
    </div>
@endsection


 