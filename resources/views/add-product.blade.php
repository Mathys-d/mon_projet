@extends('layouts.template')

@section("content")

<div>
    <p class="mt-5  fs-2 text-center">Stock Lunettes</p>
</div>

<div class="d-flex justify-content-end mb-4 me-3">
    <button type="button" class="btn btn-gris" data-bs-toggle="modal" data-bs-target="#addLunetteModal">
        Ajouter une lunette
    </button>
</div>

@foreach($lunettes as $item)
<div class="d-flex justify-content-center">
    <div class="row justify-content-center mb-5 ms-1 me-1 px-2 w-100" style="max-width: 700px;">
        <div class="col">
            <div class="d-flex align-items-start p-3 border shadow-sm position-relative" style="min-height: 120px;">
                
                <div class="me-3">
                    <img src="{{ asset( $item->img) }}" height="100" alt="lunette">
                </div>

                <div class="flex-grow-1 d-flex justify-content-between">
                    <p class="m-0 cart-items titre-moyen">name</p>
                    <p class="m-0 cart-items titre-moyen">prix €</p> 
                    <p class="m-0 cart-items titre-moyen">Stock</p> 
                </div>

                <div class="position-absolute end-0 bottom-0 mb-2 me-3 d-flex flex-column align-items-end gap-2">

                    <form method="POST" action="{{ route('add-product.update', $item->id) }}" class="d-flex justify-content-end w-75">
                    @csrf
                    @method('POST')

                    <div class="flex-grow-1 d-flex justify-content-between">             
                        <input type="text" name="name" value="{{ $item->name }}" class="form-control form-control-sm w-50 me-2">
                        <input type="number" name="prix" value="{{ $item->prix }}" min="0" class="form-control form-control-sm w-50 me-2">
                        <input type="number" name="stock" value="{{ $item->stock }}" min="0" class="form-control form-control-sm w-50 me-2">
                    </div>

                    <button type="submit" class="btn btn-sm btn-success">
                        <i class="fa-solid fa-retweet" style="color: #f6f5f4;"></i>
                    </button>
                </form>


                    <form method="POST" action="{{ route('add-product.remove', $item->id) }}">
                        @csrf
                        @method('DELETE')
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


<div class="modal fade" id="addLunetteModal" tabindex="-1" aria-labelledby="addLunetteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="{{ route('add-product.store') }}" enctype="multipart/form-data" class="modal-content">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="addLunetteModalLabel">Ajouter une nouvelle lunette</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">

        <div class="mb-3">
          <label for="name" class="form-label">Nom</label>
          <input type="text" name="name" id="name" class="form-control" required maxlength="100" value="{{ old('name') }}">
        </div>


        <div class="mb-3">
          <label for="prix" class="form-label">Prix (€)</label>
          <input type="number" step="0.01" min="1" name="prix" id="prix" class="form-control" required value="{{ old('prix') }}">
        </div>


        <div class="mb-3">
          <label for="img" class="form-label">Image (jpg, png, webp)</label>
          <input type="file" name="img" id="img" class="form-control" accept=".jpg,.jpeg,.png,.webp">
        </div>


        <div class="mb-3">
          <label for="genre" class="form-label">Genre</label>
          <select type="select" name="genre" id="genre" class="form-control" maxlength="50" value="{{ old('genre') }}">
                <option value="">genre</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
          </select>
        </div>


        <div class="mb-3">
          <label for="taille" class="form-label">Taille</label>
          <select type="select"  name="taille" id="taille" class="form-control" maxlength="50" value="{{ old('taille') }}">
                <option value="">taille</option>
                <option value="S">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
          </select>
        </div>


        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <select type="select"  name="type" id="type" class="form-control" maxlength="50" value="{{ old('type') }}">
                <option value="">Type</option>
                <option value="sport">Sport</option>
                <option value="classique">Classique </option>
                <option value="detente">Détente </option>
          </select>
        </div>


        <div class="mb-3">
          <label for="forme" class="form-label">Forme</label>
          <select type="select"  name="forme" id="forme" class="form-control" maxlength="50" value="{{ old('forme') }}">
                <option value="">Type</option>
                <option value="Ronde">Ronde</option>
                <option value="Rectangulaire">Rectangulaire </option>
                <option value="Carrée">Carrée </option>
          </select>
        </div>


        <div class="mb-3">
          <label for="stock" class="form-label">Stock</label>
          <input type="number" name="stock" id="stock" class="form-control" min="1" required value="{{ old('stock', 0) }}">
        </div>


        @if ($errors->any())
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
</div>
@endsection
