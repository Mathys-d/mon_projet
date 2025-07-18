<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIRO MIRO</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg color-orange">
        <div class="container-fluid color-orange">
            <a class="navbar-brand color-orange" href="/">
                <img src="{{ asset('images/logoNoir.png') }}" alt="logoNoir" height="40">
            </a>
            <button class="navbar-toggler border-remove" type="button" data-bs-toggle="collapse" data-bs-target="#menuBurger" aria-controls="menuBurger" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon color-orange border-remove"></span>
            </button>
        
            <div class="collapse navbar-collapse color-orange" id="menuBurger">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item color-orange">
                        <a class="nav-link active text-dark" href="/">Accueil</a>
                    </li>
                    <li class="nav-item color-orange">
                        <a class="nav-link text-dark" href="/product">Explorer</a>
                    </li>
                    <li class="nav-item color-orange">
                        <a class="nav-link text-dark" href="/custom">Personnaliser</a>
                    </li>
                    <li class="nav-item color-orange">
                        <a class="nav-link text-dark" href="/account">Compte</a>
                    </li>
                    <li class="nav-item d-flex align-items-center justify-content-between w-100">
                    <a class="nav-link text-dark" href="/contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    
@if (!Request::is('/'))
<div class="mt-2 mx-2 d-flex justify-content-between align-items-center">

    <button type="button" onclick="window.location.href='/product'" class="btn btn-gris titre-tres-petit fw-bold">
        Back
    </button>
@endif

    <div class="text-center">
        @auth
            <a href="{{ route('account') }}">
                <i class="fa-solid fa-user" style="color: #212529;"></i>
            </a>
        @else
            <a href="{{ route('login') }}">
                <i class="fa-solid fa-right-to-bracket" style="color: #212529;"></i>
            </a>
        @endauth
    </div>
@if (!Request::is('/'))
    <button type="button" onclick="window.location.href='/cart'" class="border-0 bg-transparent p-0">
        <i class="fa-solid fa-basket-shopping" style="color: #212529;"></i>
    </button>
</div>

@endif

