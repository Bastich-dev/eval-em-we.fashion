@extends('layouts.app')


@section('content')
    <main class="container my-5 d-flex flex-column admin">
        <form id="form-login" class="card p-5 my-auto" action="./list-product.html">
            <h1 class="text-center mb-5">Se connecter</h1>
            <div class="input-group my-3">
                <input type="text" class="form-control" placeholder="Identifiant" aria-label="Identifiant"
                    aria-describedby="button-addon2">
            </div>
            <div class="input-group my-3">
                <input type="password" class="form-control" placeholder="Mot de passe" aria-label="password"
                    aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span
                        class="material-symbols-outlined">
                        visibility
                    </span></button>
            </div>
            <button class="mt-5 btn btn-primary py-2 d-flex align-items-center justify-content-center">
                <span class="material-symbols-rounded me-3">
                    login
                </span>Se connecter
            </button>
        </form>
    </main>
@endsection
