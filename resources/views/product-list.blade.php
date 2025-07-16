@extends('layouts.template')

@section("content")

<div class="text-center mt-5">
  <button class="btn btn-gris mb-4 box-btn-gelar" onclick="toggleFilter()">
    <i class="fa-solid fa-filter me-2"></i>FILTER
  </button>

  <div class="card shadow-sm p-4 mx-auto mb-4 toggle-box" id="Filter" style="max-width: 600px;">
    <h5 class="card-title mb-3 text-start">
      <i class="fa-solid fa-sliders me-2" style="color: #343A40;"></i>Filtrer les résultats
    </h5>
    <div class="row g-3">
      <div class="col-md-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="searchName" placeholder="Rechercher par nom">
          <label for="searchName"><i class="fa-solid fa-magnifying-glass me-1" ></i>Rechercher par nom</label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-floating">
          <input type="number" class="form-control" id="maxPrice" placeholder="Prix max (€)">
          <label for="maxPrice"><i class="fa-solid fa-euro-sign me-1"></i>Prix max (€)</label>
        </div>
      </div>
      <div class="col-md-2 d-grid">
        <button onclick="filterItems()" class="btn btn-gris mb-4 ">
          <i class="fa-solid fa-filter"></i> Filtrer
        </button>
      </div>
    </div>
  </div>
</div>
@foreach ($lunettes as $lunette)
    @if ($lunette->id >= 2)
    <div class="container mb-5 item border-0 "
         data-name="{{ strtolower($lunette->name) }}"
         data-price="{{ $lunette->prix }}">
        <div class="row align-items-center">
            <div class="col-3 mt-4 mx-auto text-center color-grey glass-box rounded">
                <div>
                    <div class="col-3 col-sm-3 glass-box">                       
                        <img src="{{ asset($lunette->img) }}" height="167" alt="{{ $lunette->name }}" class="rounded-top">
                    </div>
                    <div class="col-3 col-sm-3 text-start box-box">
                        <div class="align-items-center">
                            <p class="titre-tres-petit marg-l marg-t">{{ $lunette->name }}</p>
                        </div>
                        <div class="align-items-center">
                            <p class="tres-petit marg-l">{{ $lunette->forme ?? 'Description non fournie' }}</p>
                        </div>
                        <div class="align-items-center">
                            <p class="tres-petit font-weight-bold marg-l">{{ $lunette->prix }}€</p>
                        </div>
                    </div>
                    <div class="col-1 col-sm-3">
                        <div class="box-btn-alt">
                            <button type="button" onclick="window.location.href='/product/{{ $lunette->id }}'" class="btn btn-gris titre-tres-petit font-weight-bold">VOIR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endforeach

<script>
    function toggleFilter() {
        const box = document.getElementById("Filter");
        box.style.display = box.style.display === "block" ? "none" : "block";
    }


    function filterItems() {
        const nameInput = document.getElementById("searchName").value.toLowerCase();
        const maxPrice = parseFloat(document.getElementById("maxPrice").value);
        const items = document.querySelectorAll(".item");

        items.forEach(item => {
            const name = item.dataset.name.toLowerCase();
            const price = parseFloat(item.dataset.price);

            const matchName = name.includes(nameInput);
            const matchPrice = isNaN(maxPrice) || price <= maxPrice;

            if (matchName && matchPrice) {
            item.style.display = "block";
            } else {
            item.style.display = "none";
            }
        });
}
</script>

@endsection
