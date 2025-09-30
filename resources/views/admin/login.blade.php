@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card shadow-sm p-4 text-center" style="width: 100%; max-width: 400px;">

        <!-- Logo Zoetic -->
        <div class="mb-3">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Zoetic" style="width: 120px;">
        </div>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf

            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email :</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Votre email" required>
            </div>

            <div class="mb-3 text-start">
                <label for="password" class="form-label">Mot de passe :</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Votre mot de passe" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Se connecter</button>
        </form>
    </div>
</div>
@endsection
