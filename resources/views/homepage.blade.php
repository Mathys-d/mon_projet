
@extends('layouts.template')

@section("content")
<div class=" position-relative mt-5 mx-0 px-0">
    <img src="{{ asset('images/bot_wave.svg') }}" class="img-fluid w-100 rotate" alt="bottom wave">

    <div class="hero-section color-orange  text-white text-center ">
        <p class="mb-4">MIRO MIRO propose un large choix de lunettes photochromiques, du design à la vente, incluant des modèles personnalisés.</p>
        <div>
            <button type="button" class="btn btn-gris" onclick="window.location.href='/product'">Explorer</button>
        </div>
    </div>

    <img src="{{ asset('images/bot_wave.svg') }}" class="img-fluid w-100" alt="bottom wave">
</div>


    <div>
        <p class="text-muted mt-5 fs-2 text-center">
        Nos Produits Tendances
        </p>
    </div>


    <div class="container mb-5">

        <div class="row align-items-center">
            <div class="col-3 mt-4 mx-auto text-center color-orange glass-box rounded" >
                <div class="higher-box">
                    <div class=" col-3 col-sm-3 glass-box">
                    <img src="{{ asset(path: 'images/lunette.png') }}" height="80" alt="lunette " class="rounded">
                    </div>
                    <div class="col-3 col-sm-3 text-start box-box">
                        <div >
                            <div>
                                <div class=" align-items-center ">
                                    <p class="ps-1">lorem</p>
                                </div>
                                <div class=" align-items-center ">
                                    <p class="ps-1">000€</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-1 col-sm-4 div-div justify-content-center align-items-center">
                        <div class=" box-btn align-items-center justify-content-center ">
                            <button type="button" class="btn px-3 btn-gris btn-rad align-items-center justify-content-center " onclick="window.location.href='/product/1'">VOIR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row align-items-center">
            <div class="col-3 mt-4 mx-auto text-center color-orange glass-box rounded" >
                <div class="higher-box">
                    <div class=" col-3 col-sm-3 glass-box">
                    <img src="{{ asset(path: 'images/lunette.png') }}" height="80" alt="lunette " class="rounded">
                    </div>
                    <div class="col-3 col-sm-3 text-start box-box">
                        <div >
                            <div>
                                <div class=" align-items-center ">
                                    <p class="ps-1">lorem</p>
                                </div>
                                <div class=" align-items-center ">
                                    <p class="ps-1">000€</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-1 col-sm-4 div-div justify-content-center align-items-center">
                        <div class=" box-btn align-items-center justify-content-center ">
                            <button type="button" class="btn px-3 btn-gris btn-rad align-items-center justify-content-center " onclick="window.location.href='/product/2'">VOIR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         
        <div class="row align-items-center">
            <div class="col-3 mt-4 mx-auto text-center color-orange glass-box rounded" >
                <div class="higher-box">
                    <div class=" col-3 col-sm-3 glass-box">
                    <img src="{{ asset(path: 'images/lunette.png') }}" height="80" alt="lunette " class="rounded">
                    </div>
                    <div class="col-3 col-sm-3 text-start box-box">
                        <div >
                            <div>
                                <div class=" align-items-center ">
                                    <p class="ps-1">lorem</p>
                                </div>
                                <div class=" align-items-center ">
                                    <p class="ps-1">000€</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-1 col-sm-4 div-div justify-content-center align-items-center">
                        <div class=" box-btn align-items-center justify-content-center ">
                            <button type="button" class="btn px-3 btn-gris btn-rad align-items-center justify-content-center " onclick="window.location.href='/product/3'">VOIR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         
        <div class="row align-items-center">
            <div class="col-3 mt-4 mx-auto text-center color-orange glass-box rounded" >
                <div class="higher-box">
                    <div class=" col-3 col-sm-3 glass-box">
                    <img src="{{ asset(path: 'images/lunette.png') }}" height="80" alt="lunette " class="rounded">
                    </div>
                    <div class="col-3 col-sm-3 text-start box-box">
                        <div >
                            <div>
                                <div class=" align-items-center ">
                                    <p class="ps-1">lorem</p>
                                </div>
                                <div class=" align-items-center ">
                                    <p class="ps-1">000€</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-1 col-sm-4 div-div justify-content-center align-items-center">
                        <div class=" box-btn align-items-center justify-content-center ">
                            <button type="button" class="btn px-3 btn-gris btn-rad align-items-center justify-content-center " onclick="window.location.href='/product/1'">VOIR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 
    </div>

    <img src="{{ asset('images/bot_wave.svg') }}" class="img-fluid w-100 rotate" alt="bottom wave">


    <div class="marge-negative">
        <div class="row align-items-center " >
            <div class="  fs-5 pt-4 color-orange px-4">
                <p class="text-dark text-center ">
                    Vous souhaitez personnaliser vos lunettes ? Vous pouvez le faire en ligne avec notre sélécteur en sélectionnant parmi différentes formes, couleurs et styles.
                </p>
                <div class="text-center btn-light ">
                    <button type="button" class="btn btn-light btn-rad mb-3" onclick="window.location.href='/custom'">JE VEUX</button>
                </div>
            </div>
        </div>
    </div>

    <img src="{{ asset('images/bot_wave.svg') }}" class="img-fluid w-100" alt="bottom wave">


    <div class="container my-5">
        <div class="row align-items-center color-grey" >
            <div class="col col-4 align-self-center mt-4 mx-auto text-center color-grey glass-box rounded" >
                <div class="higher-box-plus">
                <img src="{{ asset('images/verres.png') }}" height="50" alt="lunette " class="rounded">
                <p class="fs-2">Verres adaptatifs intelligents</p>
                <p class="fs-8">Nos verres photochromiques s’adaptent instantanément à la lumière ambiante pour offrir un confort visuel optimal — que vous soyez à vélo, en ville ou à la plage.</p>
                <div class="text-center box-auto ">
                    <button type="button" class="btn btn-gris" onclick="window.location.href='/product'">Explorer</button>
                </div>
            </div>
            </div>
              <div class="col col-4  mt-4 mx-auto text-center color-grey glass-box rounded" >
                <div class="higher-box-plus"> 
                <img src="{{ asset('images/stylo.png') }}" height="50" alt="lunette " class="rounded">
                <p class="fs-2">Lunettes 100% personnalisables</p>
                <p class="fs-8">Montures sport, urbaines ou décontractées, à vous de créer la paire qui vous ressemble. Couleur, forme, verres, tout est personnalisable.</p>
                <div class="text-center box-auto" >
                    <button type="button" class="btn btn-gris" onclick="window.location.href='/custom'">EN SAVOIR PLUS</button>
                </div>
            </div>
            </div>
              <div class="col col-4 mt-4 mx-auto text-center color-grey glass-box rounded" >
                <div class="higher-box-plus">
                <img src="{{ asset('images/livraison.png') }}" height="50" alt="lunette " class="rounded">
                <p class="fs-2">Suivi facile & livraison rapides</p>
                <p class="fs-8">Suivi de commande instantané depuis votre espace client. Expédition rapide dans toute la France.</p>
                <div class="text-center box-auto">
                    <button type="button" class="btn btn-gris mb-4">SUIVRE MA COMMANDE</button>
                </div>
            </div>
            </div>
        </div>
    </div>




@endsection
