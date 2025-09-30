@extends('layouts.app')

@section('content')
<h1>Contactez-nous</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('contact.submit') }}">
    @csrf
    <label>Nom :</label>
    <input type="text" name="name" required>
    <br>

    <label>Email :</label>
    <input type="email" name="email" required>
    <br>

    <label>Message :</label>
    <textarea name="message" required></textarea>
    <br>

    <button type="submit">Envoyer</button>
</form>
@endsection
