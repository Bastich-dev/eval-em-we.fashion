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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Common styles -->
    <link href="./styles.css" rel="stylesheet" />


    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="./assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <header class="bg-secondary">
        <div class="d-flex justify-content-between align-items-center container py-3">
            <a href="/home.html" class="logo scale-anim"><b>We</b> fashion</a>
            <nav class="me-auto ms-5">
                <ul class="d-flex align-items-center list-unstyled p-0 m-0">
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="./products/soldes">
                            Soldes
                        </a>
                    </li>
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="./products/homme">
                            Homme
                        </a>
                    </li>
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="./products/femme">
                            Femme
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="./home.html">
                <button type="button" class="btn btn-primary d-flex align-items-center"> <span
                        class="material-symbols-outlined me-2">
                        face
                    </span> Site public</button>
            </a>
        </div>
    </header>




    <main class="container my-5 d-flex flex-column admin">

        <button type="button" class="btn btn-primary ms-auto px-4 py-2 d-flex align-items-center">
            <span class="material-symbols-outlined me-2">
                add
            </span> Nouveau produit
        </button>

        <table class="table table-striped mt-5">
            <thead class="my-2">
                <tr>
                    <th class="h5">Nom</th>
                    <th class="h5">Catérgorie</th>
                    <th class="h5">Prix</th>
                    <th class="h5">Etat</th>
                    <th class="h5">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td class="d-flex py-3">
                        <a href="./product.html" target="_blank" rel="noopenner noreferrer" type="button"
                            class="me-4 material-symbols-rounded mx-1 action btn btn-success d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                visibility
                            </span>
                        </a>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-primary d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                edit
                            </span>
                        </button>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-danger d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                delete
                            </span>
                        </button>

                    </td>
                </tr>
                <tr>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td class="d-flex py-3">
                        <a href="./product.html" target="_blank" rel="noopenner noreferrer" type="button"
                            class="me-4 material-symbols-rounded mx-1 action btn btn-warning d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                visibility_off
                            </span>
                        </a>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-primary d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                edit
                            </span>
                        </button>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-danger d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                delete
                            </span>
                        </button>

                    </td>
                </tr>
                <tr>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td class="d-flex py-3">
                        <a href="./product.html" target="_blank" rel="noopenner noreferrer" type="button"
                            class="me-4 material-symbols-rounded mx-1 action btn btn-success d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                visibility
                            </span>
                        </a>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-primary d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                edit
                            </span>
                        </button>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-danger d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                delete
                            </span>
                        </button>

                    </td>
                </tr>
                <tr>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td class="d-flex py-3">
                        <a href="./product.html" target="_blank" rel="noopenner noreferrer" type="button"
                            class="me-4 material-symbols-rounded mx-1 action btn btn-success d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                visibility
                            </span>
                        </a>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-primary d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                edit
                            </span>
                        </button>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-danger d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                delete
                            </span>
                        </button>

                    </td>
                </tr>
                <tr>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td class="d-flex py-3">
                        <a href="./product.html" target="_blank" rel="noopenner noreferrer" type="button"
                            class="me-4 material-symbols-rounded mx-1 action btn btn-success d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                visibility
                            </span>
                        </a>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-primary d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                edit
                            </span>
                        </button>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-danger d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                delete
                            </span>
                        </button>

                    </td>
                </tr>
                <tr>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td>SEFESFSEFS</td>
                    <td class="d-flex py-3">
                        <a href="./product.html" target="_blank" rel="noopenner noreferrer" type="button"
                            class="me-4 material-symbols-rounded mx-1 action btn btn-success d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                visibility
                            </span>
                        </a>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-primary d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                edit
                            </span>
                        </button>
                        <button type="button"
                            class="material-symbols-rounded mx-1 action btn btn-danger d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded ">
                                delete
                            </span>
                        </button>

                    </td>
                </tr>
            </tbody>
        </table>
        <nav class="ms-auto">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

    </main>




    <footer>
        <hr>
        <div class="container pt-3  pb-4 d-flex align-items-center">
            <p class="m-0">
                Evaluation Laravel - We Fashion - Ecole Multiémédia - Juin 2022
            </p>
            <a class="ms-5 d-flex align-items-center" href="https://github.com/BastosC/eval-em-laravel-2022">
                <span class="material-symbols-outlined me-2">
                    link
                </span> Lien Github
            </a>
        </div>
    </footer>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>