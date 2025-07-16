@extends('layouts.template')

@section("content")

<div>
    <p class="mt-5  fs-2 text-center">Mon panier</p>
</div>



@foreach($cartItems as $item)

<div class="d-flex justify-content-center">
    <div class="row justify-content-center mb-5 ms-1 me-1 px-2 w-100" style="max-width: 500px;">
        <div class="col">
            <div class="d-flex align-items-start p-3 border shadow-sm position-relative" style="min-height: 120px;">
                
                <div class="me-3">
                    <img src="{{ asset($item->img) }}" height="100" alt="lunette">
                </div>


                <div class="flex-grow-1 d-flex justify-content-between">
                    <p class="m-0 cart-items">{{ $item->name }}</p>
                    <p class="m-0 cart-items">{{ $item->prix }} €</p> 
                    <p class="m-0 cart-items">Qty : {{ $item->quantity }}</p> 
                </div>


                <div class="position-absolute end-0 bottom-0 mb-2 me-3 d-flex flex-column align-items-end gap-2">

                    <form method="POST" action="{{ route('cart.update', $item->cart_id) }}" class="d-flex justify-content-end w-75">
                        @csrf
                        <input type="number" name="quantity" id="quantity-{{ $item->cart_id }}" value="{{ $item->quantity }}" min="1" class="form-control form-control-sm w-50 me-2 ">
                        <button type="submit" class="btn btn-sm btn-success">
                            <i class="fa-solid fa-retweet" style="color: #f6f5f4;"></i>
                        </button>
                    </form>


                    <form method="POST" action="{{ route('cart.remove', $item->cart_id) }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fa-solid fa-delete-left" style="color: #f6f5f4;"></i>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>



@endforeach


<div class="color-gris mb-5 w-90 ms-3 me-3 rounded pe-5 py-1">
    <p class="text-light d-flex justify-content-end my-2">Total {{ $total }} €</p>
</div>

<div class="me-3">
    <div class="d-flex justify-content-end">         
        <button type="button" class="btn btn-gris mb-4" onclick="window.location.href='/paiement'">VALIDER</button>
    </div>
</div>

@endsection
