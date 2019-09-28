@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container-fluid">
        <div class="row min-vh-100">

            <!-- The image half (hide on smaller devices) -->
            <div class="col d-none d-md-block bg" style="background-image: url('{{ asset('images/bg-police.png') }}')"></div>

            <!-- The content half -->
            <main class="col d-flex align-items-center">
                <div class="p-3">
                    <div>
                        <h1>Login with your Steam account.</h1>

                        <p>
                            Authenticate with the CAD using the same Steam profile that you're using to play on Legacy Roleplay. The databases are connected, so
                            we'll seamlessly be able to grab your information from the server.
                        </p>

                        <a href="{{ route('login.steam') }}" class="btn btn-primary">
                            <i class="fab fa-steam-square"></i>
                            Login with steam now
                        </a>
                    </div>
                </div>
            </main>

        </div>
    </div>
@endsection
