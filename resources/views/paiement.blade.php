@extends('layouts.template')

@section("content")

<div class="container mt-3">
    <span class="">Finaliser Ma Commande</span>
</div>

<form method="POST" action="{{ route('paiement.submit') }}">
    @csrf

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 offset-md-3">
                <h2 class="mb-4">Informations de paiement</h2>

                <div class="mb-3">
                    <label for="card_number" class="form-label">Numéro de la carte</label>
                    <input type="text" class="form-control color-pay rounded-0" name="numero_carte" id="card_number" placeholder="1234 5678 9012 3456" required>
                </div>

                <div class="mb-3">
                    <label for="card_name" class="form-label">Nom du titulaire</label>
                    <input type="text" class="form-control color-pay rounded-0" name="nom_titulaire" id="card_name" placeholder="Nom complet" required>
                </div>

                <div class="mb-3">
                    <label for="expiration" class="form-label w-50">Date d'expiration</label>
                    <input type="text" class="form-control color-pay rounded-0 w-50" name="expiration" id="expiration" placeholder="MM/AA" required>
                </div>

                <div class="mb-4">
                    <label for="cvv" class="form-label w-50">Code de sécurité (CVV)</label>
                    <input type="text" class="form-control color-pay rounded-0 w-50" name="code_securite" id="cvv" placeholder="123" required>
                </div>

                <button type="submit" class="btn btn-gris w-100">CONTINUER</button>
            </div>
        </div>
    </div>
</form>

@endsection