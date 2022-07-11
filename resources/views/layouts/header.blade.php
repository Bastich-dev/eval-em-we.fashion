<header class="bg-secondary">
    <div class="d-flex justify-content-between align-items-center container py-3">
        <a href="/home.html" class="logo scale-anim"><b>We</b> fashion</a>

        @include('layouts.navPublic')
        @if (5 < 10)
            <nav class="me-auto ms-5">
                <ul class="d-flex align-items-center list-unstyled p-0 m-0">
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="/products/soldes">
                            Produits
                        </a>
                    </li>
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="/products/homme">
                            Catégories
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
        @else
            <nav class="me-auto ms-5">
                <ul class="d-flex align-items-center list-unstyled p-0 m-0">
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link {{ request()->is('/products/soldes') ? 'active' : '' }} "
                            href="/products/soldes">
                            Soldes
                        </a>
                    </li>
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link {{ request()->is('/products/homme') ? 'active' : '' }} "
                            href="/products/homme">
                            Homme
                        </a>
                    </li>
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link {{ request()->is('/products/femme') ? 'active' : '' }} "
                            href="/products/femme">
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
        @endif

    </div>
</header>
