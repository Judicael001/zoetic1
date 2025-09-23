<!-- resources/views/admin/login.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>Connexion Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Connexion Administrateur</h2>

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required autofocus>
            </div>

            <div class="mb-3">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>
    </div>
</body>
</html> -->



@extends('layouts.app')

@section('content')
<div style="min-height: 100vh; display: flex; justify-content: center; align-items: center; background-color: #f3f4f6;">
    <div style="width: 100%; max-width: 400px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; margin-bottom: 20px;">Connexion Admin</h2>

       @if ($errors->any())
            <div style="background-color: #fee2e2; color: #b91c1c; padding: 10px; border-radius: 4px; margin-bottom: 15px; border: 1px solid #fca5a5;">
                {{ $errors->first() }}
            </div>
        @endif


        <form action="{{ route('admin.login') }}" method="POST">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; margin-bottom: 5px;">Email</label>
                <input type="email" name="email" id="email" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="password" style="display: block; margin-bottom: 5px;">Mot de passe</label>
                <input type="password" name="password" id="password" required
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <button type="submit"
                style="width: 100%; background-color: #2563eb; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer;">
                Se connecter
            </button>
        </form>
    </div>
</div>
@endsection

