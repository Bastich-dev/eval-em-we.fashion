<header class="bg-secondary">
    <div class="d-flex justify-content-between align-items-center container py-3">
        <a href="/" class="logo scale-anim"><b>We</b> fashion</a>
        @if (5 < 10)
            <nav class="me-auto ms-5">
                <ul class="d-flex align-items-center list-unstyled p-0 m-0">
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="/category/soldes">
                            Produits
                        </a>
                    </li>
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="/category/homme">
                            Catégories
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="/admin">
                <button type="button" class="btn btn-primary d-flex align-items-center"> <span
                        class="material-symbols-outlined me-2">
                        admin_panel_settings
                    </span> Espace administrateur</button>
            </a>
        @else
            <nav class="me-auto ms-5">
                <ul class="d-flex align-items-center list-unstyled p-0 m-0">
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link {{ request()->is('/category/soldes') ? 'active' : '' }} "
                            href="/category/soldes">
                            Soldes
                        </a>
                    </li>
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link {{ request()->is('/category/homme') ? 'active' : '' }} "
                            href="/category/homme">
                            Homme
                        </a>
                    </li>
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link {{ request()->is('/category/femme') ? 'active' : '' }} "
                            href="/category/femme">
                            Femme
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="/admin">
                <button type="button" class="btn btn-primary d-flex align-items-center"> <span
                        class="material-symbols-outlined me-2">
                        admin_panel_settings
                    </span> Espace administrateur</button>
            </a>
        @endif

    </div>
</header>
