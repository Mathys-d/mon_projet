@extends('layouts.template')

@section("content")

<div class="mt-2 ms-2">
    <button type="button" onclick="window.location.href='/product'" class="btn btn-gris titre-tres-petit font-weight-bold">Back</button>
</div>

<div class="container px-0 my-5 ">
<div class="mt-5">
    <div id="carouselLunettes" class="carousel slide position-relative" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img src="{{ asset($lunette->img) }}" class="d-block mx-auto" width="320" alt="Lunette 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset($lunette->img) }}" class="d-block mx-auto" width="320" alt="Lunette 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset($lunette->img) }}" class="d-block mx-auto" width="320" alt="Lunette 3">
            </div>
        </div>

        <!-- Left arrow -->
        <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#carouselLunettes" data-bs-slide="prev">
            <i class="fas fa-chevron-left fa-2x text-dark"></i>
            <span class="visually-hidden">Précédent</span>
        </button>

        <!-- right arrow -->
        <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#carouselLunettes" data-bs-slide="next">
            <i class="fas fa-chevron-right fa-2x text-dark"></i>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</div>

        <div class="elemnt-panier">
            <div class="col mt-2 ">
                <div class=" align-items-center ">
                    <p class="fs-6  marg-t mb-0 ">Nom des lunettes</p> 
                </div>
            </div>
            <div class="col mt-0">
                <div class=" align-items-center ">
                    <p class="fs-6  marg-t">000€</p>
                </div>
            </div>
            <div class="text-center mt-0" >
                
                <button type="button" class="btn btn-gris mb-4 btn-panier">PANIER</button>
            </div>
        </div>


        <div class="elemnt-panier">
            <hr class="mid-custom-line">
                <div class="col mt-0">
                    <div class=" align-items-center ">
                        <p class="fs-6  marg-t">Informations</p>
                    </div>
                </div>
                <div class="col mt-0">
                    <div class="d-flex align-items-center">
                        <p class="titre-tres-petit fw-bold marg-t box-detail-product" >Genre</p>  
                        <p class="titre-tres-petit box-detail-product"> {{ $lunette->genre }}</p>
                    </div>
                </div>
                <div class="col mt-0">
                    <div class="d-flex align-items-center">
                        <p class="titre-tres-petit fw-bold marg-t box-detail-product">Taille</p>
                        <p class="titre-tres-petit box-detail-product"> {{ $lunette->taille }}</p>
                    </div>
                </div>
                 <div class="col mt-0">
                    <div class="d-flex align-items-center">
                        <p class="titre-tres-petit fw-bold marg-t box-detail-product">Type</p>
                        <p class="titre-tres-petit box-detail-product"> {{ $lunette->type }}</p>
                    </div>
                </div>
                <div class="col mt-0">
                    <div class="d-flex align-items-center">
                        <p class="titre-tres-petit fw-bold marg-t box-detail-product">Forme</p>
                        <p class="titre-tres-petit box-detail-product"> {{ $lunette->forme }}</p>
                    </div>
                </div>
        </div>
</div>
    
@endsection



