<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <title>We Fashion</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700;900&family=Permanent+Marker&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Common styles -->
    <link href="./styles.css" rel="stylesheet" />

</head>

<body>
    <header class="bg-secondary">
        <div class="d-flex justify-content-between align-items-center container py-3">
            <a href="/home.html" class="logo scale-anim"><b>We</b> fashion</a>
            <nav class="me-auto ms-5">
                <ul class="d-flex align-items-center list-unstyled p-0 m-0">
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="/products/soldes">
                            Soldes
                        </a>
                    </li>
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="/products/homme">
                            Homme
                        </a>
                    </li>
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="/products/femme">
                            Femme
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="./admin.html">
                <button type="button" class="btn btn-primary d-flex align-items-center"> <span
                        class="material-symbols-outlined me-2">
                        admin_panel_settings
                    </span> Espace administrateur</button>
            </a>
        </div>
    </header>
    <main class="container my-5">
        <h1><strong>Accueil</strong></h1>
        <p class="text-end mt-4 mb-4">4 Résultats</p>
        <div class="row g-5">
            <div class="col-4">
                <a href="./product.html" class="card scale-anim">
                    <img src="./assets/hommes/0693445251_1_1_1.jpg" height="300" alt="...">
                    <div class="card-body">
                        <h2 class="h5">Card title</h2>
                        <p>Some quick example text to build </p>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="" class="card scale-anim">
                    <img src="./assets/hommes/0693445251_1_1_1.jpg" height="300" alt="...">
                    <div class="card-body">
                        <h2 class="h5">Card title</h2>
                        <p>Some quick example text to build </p>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="" class="card scale-anim">
                    <img src="./assets/hommes/0693445251_1_1_1.jpg" height="300" alt="...">
                    <div class="card-body">
                        <h2 class="h5">Card title</h2>
                        <p>Some quick example text to build </p>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="" class="card scale-anim">
                    <img src="./assets/hommes/0693445251_1_1_1.jpg" height="300" alt="...">
                    <div class="card-body">
                        <h2 class="h5">Card title</h2>
                        <p>Some quick example text to build </p>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <footer class="bg-light">
        <div class="container py-4 d-flex align-items-center">
            <p class="m-0">
                Evaluation Laravel - We Fashion - Ecole Multiémédia - Juin 2022
            </p>
            <a class="ms-5" href="https://github.com/BastosC/eval-em-laravel-2022">
                Lien Github
            </a>
        </div>
    </footer>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>