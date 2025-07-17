@extends('layouts.template')

@section('content')
<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Contactez-nous</h2>

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" required>
            @error('nom')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Votre message</label>
            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
            @error('message')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4">Envoyer</button>
        </div>
    </form>
</div>
@endsection
