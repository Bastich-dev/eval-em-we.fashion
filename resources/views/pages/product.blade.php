@extends('layouts.app')

@section('content')
    {{ $sizes = $product->size }}
    <article id="product" class="row bg-secondary rounded product my-auto">
        <div class="col-6 p-0">
            <img src="./assets/hommes/0693445251_1_1_1.jpg" height="700" width="500" alt="...">
        </div>
        <form class="col-6 p-5 bg-light d-flex flex-column">
            <span class="material-symbols-rounded back" onclick="window.history.back()">
                trending_flat
            </span>
            <h1><strong>Titre du produit</strong></h1>
            <h2 class="h4 ms-4 text-secondary">
                <strong>
                    Homme / Femme
                </strong>
            </h2>
            <p class="ps-4 py-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime saepe nemo perferendis. Fugiat
                perspiciatis nisi quam consectetur necessitatibus corrupti ex, error inventore in nam reprehenderit
                mollitia assumenda repellendus? Distinctio, ut.
            </p>
            <div class="d-flex align-items-center mb-5 mt-auto">
                <span class="me-2">Tailles disponibles :</span>
                @forelse ($sizes as $elSize)
                    <label for="flexRadioDefault1" type="button"
                        class="d-flex flex-column align-items-center card py-2 px-3  mx-2">
                        <input class="form-check-input h4 m-0" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <p class="m-0">XS</p>
                    </label>
                @empty
                    <p>Aucune taille disponible pour cet article.</p>
                @endforelse
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <h3> <strong>Ref: {{ $product->sku }}</strong></h3>
                <button type="button" class="btn btn-primary btn-lg px-4 py-2 d-flex align-items-center">
                    <span class="material-symbols-outlined me-2">
                        add
                    </span> Ajouter au panier
                </button>
            </div>
        </form>
    </article>
@endsection
