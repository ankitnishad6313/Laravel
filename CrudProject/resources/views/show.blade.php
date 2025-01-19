@extends('layout')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-primary">User Details</h2>
                <span class="d-block">Name: {{ $user->name }}</span>
                <span class="d-block">Email: {{ $user->email }}</span>
                <span class="d-block">Phone: {{ $user->phone }}</span>
                <span class="d-block">Gender: {{ $user->gender }}</span>
                <span class="d-block">City: {{ $user->city }}</span>
            </div>
        </div>
    </div>
@endsection