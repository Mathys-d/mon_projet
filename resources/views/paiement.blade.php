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

                <button class="btn btn-gris w-100" onclick="toggleNextCard(event)">CONTINUER</button>
                
                
                <div class=" p-2" id="toggleNextCard">
                    <p>Choisissez votre mode de livraison</p>

                    <div class="">
                        <label class="border ">
                            <img src="{{ asset(path: 'images/simpleDelivery.png') }}" height="80" alt="simpleDelivery " class="">
                            <p>Livraison Simple</p>
                            <p>Optes pour une livraison simple</p>
                            <input type="checkbox" name="paiement" value="cb" onclick="selectOnlyOne(this)"> 
                        </label>

                        <label class="border">
                            <img src="{{ asset(path: 'images/expressDelivery.png') }}" height="80" alt="expressDelivery" class="">
                            <p>Livraison Express</p>
                            <p>Optes pour une livraison plus rapide</p>
                            <input type="checkbox" name="paiement" value="paypal" onclick="selectOnlyOne(this)">
                        </label>
                    </div>
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
  box.style.display = box.style.display === "block" ? "none" : "block";
}

function selectOnlyOne(checkbox) {
  const checkboxes = document.getElementsByName('paiement');
  checkboxes.forEach((cb) => {
    if (cb !== checkbox) cb.checked = false;
  });
}
</script>


@endsection