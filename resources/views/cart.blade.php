@extends('layouts.template')

@section("content")

<div>
    <p class="mt-5  fs-2 text-center">Mon panier</p>
</div>


<div class="d-flex justify-content-center">
    <div class="row justify-content-center mb-5 ms-1 me-1 px-2 w-100"style="max-width: 500px;">
        <div class="col ">
            <div class="d-flex align-items-start p-3 border  shadow-sm">
            
            <div class="me-3">
                <img src="{{ asset(path: 'images/lunette.png') }}" height="100" alt="lunette">
            </div>
                    <div class="flex-grow-1 d-flex justify-content-between">
                        <p class="mb-1">Lorem</p>
                        <p class="mb-0 me-2">000€</p>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="row justify-content-center mb-5 ms-1 me-1 px-2 w-100"style="max-width: 500px;">
        <div class="col ">
            <div class="d-flex align-items-start p-3 border  shadow-sm">
            
            <div class="me-3">
                <img src="{{ asset(path: 'images/lunette.png') }}" height="100" alt="lunette">
            </div>
                    <div class="flex-grow-1 d-flex justify-content-between">
                        <p class="mb-1">Lorem</p>
                        <p class="mb-0 me-2">000€</p>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="row justify-content-center mb-5 ms-1 me-1 px-2 w-100"style="max-width: 500px;">
        <div class="col ">
            <div class="d-flex align-items-start p-3 border  shadow-sm">
            
            <div class="me-3">
                <img src="{{ asset(path: 'images/lunette.png') }}" height="100" alt="lunette">
            </div>
                    <div class="flex-grow-1 d-flex justify-content-between">
                        <p class="mb-1">Lorem</p>
                        <p class="mb-0 me-2">000€</p>
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="color-gris mb-5 w-90 ms-3 me-3 rounded pe-5 py-1">
    <p class="text-light d-flex justify-content-end my-2">Total €</p>
</div>

<div class="me-3">
    <div class="d-flex justify-content-end">         
        <button type="button" class="btn btn-gris mb-4" onclick="window.location.href='/paiement'">VALIDER</button>
    </div>
</div>
@endsection
