@extends('layouts.template')

@section("content")


<form method="POST" action="{{ route('paiement.submit') }}">
    @csrf

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 offset-md-3">
                <h2 class="mb-4 text-center">Finaliser Ma Commande</h2>
                <div class="mb-3">
                    <label for="card_number" class="form-label">Numéro de la carte</label>
                    <input type="text" class="form-control color-pay rounded-0" name="numero_carte" id="card_number" placeholder="1234 5678 9012 3456" required>
                </div>
                <div class="mb-3">
                    <label for="card_name" class="form-label">Nom du titulaire</label>
                    <input type="text" class="form-control color-pay rounded-0" name="nom_titulaire" id="card_name" placeholder="Nom complet" required>
                </div>
                <div class="row mb-5">
                <div class="col-6 mb-3">
                    <label for="expiration" class="form-label">Date d'expiration</label>
                    <input type="text" class="form-control color-pay rounded-0 d-flex align-items-end" name="expiration" id="expiration" placeholder="MM/AA" required>
                </div>
                <div class="col-6 mb-3">
                    <label for="cvv" class="form-label">Code de sécurité</label>
                    <input type="text" class="form-control color-pay rounded-0" name="code_securite" id="cvv" placeholder="123" required>
                </div>
                </div>
                <div class="text-center">
                <button type="button" class="btn btn-gris px-4" onclick="toggleNextCard(event)">CONTINUER</button>
                </div>


                <div class="hidden" id="toggleNextCard">
                    <hr class="custom-line-payment">
                <div class="d-flex justify-content-center ">
                    <div class="mt-5 py-4 w-75 border-0" >
                        <p>Choisissez votre mode de livraison</p>
                        <div class="mt-4 d-flex gap-4 flex-wrap">
                            <label class="border border-2 border-dark box-delivery d-flex align-items-center px-3 w-100" style="gap: 1rem;">
                                <div class="d-flex align-items-center justify-content-start" style="height: 137px;">
                                    <img src="{{ asset('images/simpleDelivery.png') }}" height="50" alt="simpleDelivery">

                                </div>
                                <div class="flex-grow-1">
                                    <p class="fs-6 mb-1">Livraison Simple</p>
                                    <p class="tres-petit mb-2">Optez pour une livraison simple</p>
                                </div>
                                <input type="checkbox" name="paiement" value="cb" onclick="selectOnlyOne(this)" class="ms-auto me-3">
                            </label>
                            <label class="border border-2 border-dark box-delivery d-flex align-items-center px-3 w-100" style="gap: 1rem;">
                                <div class="d-flex align-items-center justify-content-start" style="height: 137px;">
                                    <img src="{{ asset('images/expressDelivery.png') }}" height="50" alt="expressDelivery">

                                </div >
                                <div class="flex-grow-1">
                                    <p class="fs-6 mb-1">Livraison Express</p>
                                    <p class="tres-petit mb-2">Optez pour une livraison plus rapide</p>
                                </div>
                                <input type="checkbox" name="paiement" value="paypal" onclick="selectOnlyOne(this)" class="ms-auto me-3">
                            </label>

                        </div>
                        <div class="text-center mt-4">
                        <button type="button" class="btn btn-gris px-4" onclick="(event)">CONTINUER</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="hidden" id="toggleNextCard">
                <hr class="custom-line-payment mb-4">

                <p class="text-center">Facture</p>
                <div class="bg-light rounded">

                    <p class="fs-6 ms-3 pt-2">{{ $user->name }}</p>
                    <div class="d-flex justify-content-start mt-3">
                        <p class="fs-6 ms-3 mb-0 me-3">{{ $user->billing_number }}</p>
                        <p class="fs-6 ms-3 mb-0">{{ $user->billing_street }}</p>
                    </div>   
                    <div class="d-flex justify-content-start mt-0">
                        <p class="fs-6 ms-3 me-3">{{ $user->billing_postal_code }}</p>
                        <p class="fs-6 ms-3 ">{{ $user->billing_city }}</p>
                    </div>

                    @foreach ($cartItems as $item)
                        <div class="d-flex justify-content-start ">

                            <p class="fs-6 ms-3 mb-0 me-3">{{$item->quantity}}x</p>
                            <p class="fs-6 ms-3 mb-0"> {{$item->name}}</p>
                        </div>
                    @endforeach
                    <p class="fs-6 mt-3 pb-2 pe-3 d-flex justify-content-end">Total : {{$total}}€</p>
                </div> 

                <div class="text-center">
                    <button type="submit" class="btn btn-gris px-4">VALIDER LE PAIEMENT</button>
                </div>   
            </div>
            
            <hr class="custom-line-payment mt-5 mb-4">

            <div class="text-center">
                <button class="btn btn-gris px-4" href="/">RETOUR A L'ACCUEIL</button>
            </div>
            </div>
        </div>
    </div>
</form>


<script>
function toggleNextCard(event) {
    event.preventDefault();

    const numeroCarte = document.getElementById("card_number").value.trim();
    const nomTitulaire = document.getElementById("card_name").value.trim();
    const expiration = document.getElementById("expiration").value.trim();
    const cvv = document.getElementById("cvv").value.trim();

    if (!numeroCarte || !nomTitulaire || !expiration || !cvv) {
        alert("Veuillez remplir tous les champs de paiement.");
        return;
    }

    const box = document.getElementById("toggleNextCard");

    if (box.classList.contains("hidden")) {
        box.classList.remove("hidden");
        box.classList.add("visible");
    } else {
        box.classList.remove("visible");
        box.classList.add("hidden");
    }
}

function selectOnlyOne(checkbox) {
    const checkboxes = document.getElementsByName('paiement');
    checkboxes.forEach((cb) => {
        if (cb !== checkbox) cb.checked = false;
    });
}
</script>



@endsection