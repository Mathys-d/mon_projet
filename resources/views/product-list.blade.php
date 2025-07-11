@extends('layouts.template')

@section("content")

<div class="text-center mt-5">
    <button type="button" class="btn btn-gris mb-4 box-btn-gelar">FILTER</button>
</div>

@foreach ($lunettes as $lunette)
    @if ($lunette->id >= 2)
    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-3 mt-4 mx-auto text-center color-grey glass-box rounded">
                <div>
                    <div class="col-3 col-sm-3 glass-box">                       
                    <img src="{{ asset($lunette->img) }}" height="167" alt="{{ $lunette->name }}" class="rounded-top">
                    </div>
                    <div class="col-3 col-sm-3 text-start box-box">
                        <div>
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

@endsection
