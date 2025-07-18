@extends('layouts.template')

@section('content')
    <div class="container mt-5 mb-5">
        <h2 class="text-center">Mon compte</h2>
    </div>

    <div class="container mb-5">
        <p><strong>Nom :</strong> {{ $user->name }}</p>
        <p><strong>Email :</strong> {{ $user->email }}</p>
        <p class="mb-5"><strong>adresse :</strong> {{ $user->billing_number }} {{ $user->billing_street }}, {{ $user->billing_postal_code }},	{{ $user->billing_city }}</p>
    </div>
    
    <div class="container mb-5">
        <form action="{{route ('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Se déconnecter</button>
        </form>
    </div>
@endsection