@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome, {{ auth()->user()->name }}</h1>
    <img src="{{ auth()->user()->avatar }}" alt="Avatar">

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-danger" type="submit">Logout</button>
    </form>
@endsection
