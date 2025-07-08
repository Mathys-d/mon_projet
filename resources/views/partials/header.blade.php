<nav class="navbar navbar-expand-lg color-orange">
        <div class="container-fluid color-orange">
            <a class="navbar-brand color-orange" href="#">
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
                        <a class="nav-link text-dark" href="/product/{id}">Personnaliser</a>
                    </li>
                    <li class="nav-item color-orange">
                        <a class="nav-link text-dark" href="#">Compte</a>
                    </li>
                    <li class="nav-item color-orange">
                        <a class="nav-link text-dark" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>