@extends('layouts.template')

@section('content')
<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Sinscrire</h2>

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif


    <form method="POST" action="{{ route('register.submit') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom complet</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

      <div class="mb-3">
            <label for="email" class="form-label">Mots de passe</label>
            <input type="mdp" class="form-control @error('mdp') is-invalid @enderror" id="mdp" name="mdp" value="{{ old('mdp') }}" required>
            @error('mdp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <p>
            <a href="/login">J'ai déja un compte</a>
        </p>

        <div class="text-center">
            <button type="submit" class="btn btn-gris px-4">Envoyer</button>
        </div>
    </form>
</div>
@endsection
