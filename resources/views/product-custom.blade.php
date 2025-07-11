@extends('layouts.template')

@section("content")


    <div>
            <p class="mt-5 fs-2 text-center">Personnaliser vos lunetttes !</p>
            <hr class="custom-line"></hr>
    </div>
    
    <div>
        <div class="trigger-btn" onclick="toggleSelectBoxMonture()">
            Choix 1: Monture
        </div>

        <div class="toggle-box" id="selectBoxMonture">
            <select>
                <option value="">-- Sélectionnez --</option>
                <option value="1">Ronde</option>
                <option value="2">Carré</option>
                <option value="3">Rectangulaire</option>
            </select>
        </div>
    <hr class="custom-line"></hr>

    </div>

    <div>
    <div class="trigger-btn" onclick="toggleSelectBoxColor()">
        Choix 2: Couleur Monture
    </div>

    <div class="toggle-box" id="selectBoxColor" style="display: none;">
        
        <div id="colorCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">

                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-3">
                        <div class="color-option bg-primary" data-color="blue"></div>
                        <div class="color-option bg-danger" data-color="red"></div>
                        <div class="color-option bg-success" data-color="green"></div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-3">
                        <div class="color-option bg-warning" data-color="yellow"></div>
                        <div class="color-option bg-dark" data-color="black"></div>
                        <div class="color-option bg-info" data-color="cyan"></div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#colorCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%)"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#colorCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%)"></span>
                <span class="visually-hidden">Suivant</span>
            </button>

        </div>

    </div>
    <hr class="custom-line">
    </div>


    <div>
        <div class="trigger-btn" onclick="toggleSelectBoxVerres()">
            Choix 3: Verres
        </div>

        <div class="toggle-box" id="toggleSelectBoxVerres">
            <select>
                <option value="">-- Sélectionnez --</option>
                <option value="1">Rond</option>
                <option value="2">Carré</option>
                <option value="3">Rectangulaire</option>
            </select>
        </div>
    <hr class="custom-line"></hr>

    </div>
    
    <div>
        <div class="trigger-btn" onclick="selectBoxverresColor()">
            Choix 4: Couleur Verres
        </div>
        <div class="toggle-box" id="selectBoxverresColor" style="display: none;">
        
        <div id="colorCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">

                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-3">
                        <div class="color-option bg-primary" data-color="blue"></div>
                        <div class="color-option bg-danger" data-color="red"></div>
                        <div class="color-option bg-success" data-color="green"></div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-3">
                        <div class="color-option bg-warning" data-color="yellow"></div>
                        <div class="color-option bg-dark" data-color="black"></div>
                        <div class="color-option bg-info" data-color="cyan"></div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#colorCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%)"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#colorCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%)"></span>
                <span class="visually-hidden">Suivant</span>
            </button>

        </div>

    </div>
    <hr class="custom-line">
    </div>
    

    <div>
        <div class="trigger-btn" onclick="toggleSelectBoxBoite()">
            Choix 5: boite
        </div>

        <div class="toggle-box" id="toggleSelectBoxBoite">
            <select>
                <option value="">-- Sélectionnez --</option>
                <option value="1">Classique</option>
                <option value="2">Modern</option>
                <option value="3">Vintage</option>
            </select>
        </div>
    <hr class="custom-line"></hr>

    </div>

    <div>
        <div class="trigger-btn" onclick="toggleSelectBoxColorBoite()">
            Choix 6: Couleur Boite
        </div>
        <div class="toggle-box" id="toggleSelectBoxColorBoite" style="display: none;">
        
        <div id="colorCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">

                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-3">
                        <div class="color-option bg-primary" data-color="blue"></div>
                        <div class="color-option bg-danger" data-color="red"></div>
                        <div class="color-option bg-success" data-color="green"></div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-3">
                        <div class="color-option bg-warning" data-color="yellow"></div>
                        <div class="color-option bg-dark" data-color="black"></div>
                        <div class="color-option bg-info" data-color="cyan"></div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#colorCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%)"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#colorCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%)"></span>
                <span class="visually-hidden">Suivant</span>
            </button>

        </div>

    </div>
    <hr class="custom-line">
    </div>
<div class="d-flex justify-content-end me-2">
    <button type="button" class="btn btn-gris  mb-5 me-2 px-5" onclick="window.location.href='/cart'">Panier</button>
</div>

<script>
    function toggleSelectBoxMonture() {
        const box = document.getElementById("selectBoxMonture");
        box.style.display = box.style.display === "block" ? "none" : "block";
    }
     function toggleSelectBoxColor() {
        const box = document.getElementById("selectBoxColor");
        box.style.display = box.style.display === "block" ? "none" : "block";
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.color-option').forEach(el => {
            el.addEventListener('click', function () {
                const color = this.getAttribute('data-color');
                alert("Couleur choisie : " + color);
            });
        });
    });
        function toggleSelectBoxVerres() {
        const box = document.getElementById("toggleSelectBoxVerres");
        box.style.display = box.style.display === "block" ? "none" : "block";
    }
         function selectBoxverresColor() {
        const box = document.getElementById("selectBoxverresColor");
        box.style.display = box.style.display === "block" ? "none" : "block";
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.color-option').forEach(el => {
            el.addEventListener('click', function () {
                const color = this.getAttribute('data-color');
                alert("Couleur choisie : " + color);
            });
        });
    });

        function toggleSelectBoxBoite() {
        const box = document.getElementById("toggleSelectBoxBoite");
        box.style.display = box.style.display === "block" ? "none" : "block";
    }
     function toggleSelectBoxColorBoite() {
        const box = document.getElementById("toggleSelectBoxColorBoite");
        box.style.display = box.style.display === "block" ? "none" : "block";
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.color-option').forEach(el => {
            el.addEventListener('click', function () {
                const color = this.getAttribute('data-color');
                alert("Couleur choisie : " + color);
            });
        });
    });
</script>
@endsection