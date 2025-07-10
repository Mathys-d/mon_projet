@extends('layouts.template')

@section("content")

    <div class="text-center mt-5">
        <button type="button" class="btn btn-gris mb-4 box-btn-gelar">FILTER</button>
    </div>

     <div class="container mb-5 mb-5">
        <div class="row align-items-center">
            <div class="col-3 mt-4 mx-auto text-center color-grey glass-box rounded" >
                <div class="">
                    <div class=" col-3 col-sm-3 glass-box">
                    <img src="{{ asset(path: 'images/lunette-2.png') }}" height="167" alt="lunette " class="rounded-top">
                    </div>
                    <div class="col-3 col-sm-3 text-start box-box">
                        <div >
                            <div>
                                <div class=" align-items-center ">
                                    <p class="titre-tres-petit marg-l marg-t">Nom des lunettes ici la</p>
                                </div>
                                <div class=" align-items-center ">
                                    <p class="tres-petit marg-l">Ces lunettes sont magnifique genre wahhhh suis jaloux de fou</p>
                                </div>
                                <div class=" align-items-center ">
                                    <p class="tres-petit font-weight-bold marg-l">10€</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-sm-3">
                        <div class=" box-btn-alt ">
                            <button type="button" onclick="window.location.href='/product/1'" class="btn btn-gris titre-tres-petit font-weight-bold">VOIR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <div class="container mb-5 mb-5">
        <div class="row align-items-center">
            <div class="col-3 mt-4 mx-auto text-center color-grey glass-box rounded" >
                <div class="">
                    <div class=" col-3 col-sm-3 glass-box">
                    <img src="{{ asset(path: 'images/lunette-2.png') }}" height="167" alt="lunette " class="rounded-top">
                    </div>
                    <div class="col-3 col-sm-3 text-start box-box">
                        <div >
                            <div>
                                <div class=" align-items-center ">
                                    <p class="titre-tres-petit marg-l marg-t">Nom des lunettes ici la</p>
                                </div>
                                <div class=" align-items-center ">
                                    <p class="tres-petit marg-l">Ces lunettes sont magnifique genre wahhhh suis jaloux de fou</p>
                                </div>
                                <div class=" align-items-center ">
                                    <p class="tres-petit font-weight-bold marg-l">10€</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-sm-3">
                        <div class=" box-btn-alt ">
                            <button type="button" onclick="window.location.href='/product/2'" class="btn btn-gris titre-tres-petit font-weight-bold">VOIR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <div class="container mb-5 mb-5">
        <div class="row align-items-center">
            <div class="col-3 mt-4 mx-auto text-center color-grey glass-box rounded" >
                <div class="">
                    <div class=" col-3 col-sm-3 glass-box">
                    <img src="{{ asset(path: 'images/lunette-2.png') }}" height="167" alt="lunette " class="rounded-top">
                    </div>
                    <div class="col-3 col-sm-3 text-start box-box">
                        <div >
                            <div>
                                <div class=" align-items-center ">
                                    <p class="titre-tres-petit marg-l marg-t">Nom des lunettes ici la</p>
                                </div>
                                <div class=" align-items-center ">
                                    <p class="tres-petit marg-l">Ces lunettes sont magnifique genre wahhhh suis jaloux de fou</p>
                                </div>
                                <div class=" align-items-center ">
                                    <p class="tres-petit font-weight-bold marg-l">10€</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-sm-3">
                        <div class=" box-btn-alt ">
                            <button type="button" class="btn btn-gris titre-tres-petit font-weight-bold" onclick="window.location.href='/product/3'" >VOIR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



     
@endsection
