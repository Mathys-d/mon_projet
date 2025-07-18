@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Connexion</h2>

    @if (session('error'))
        <div class="alert alert-danger text-center">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf


        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>


        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="mb-3">
            <a href="/register">Je n'ai pas de compte</a>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-gris">Connexion</button>
        </div>
    </form>
</div>
@endsection