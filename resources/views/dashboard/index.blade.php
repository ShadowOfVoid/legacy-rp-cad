@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome, {{ auth()->user()->name }}</h1>
    <img src="{{ auth()->user()->avatar }}" alt="Avatar">
@endsection
