<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Zoetic - Site Vitrine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Survol des liens en jaune */
        .navbar-nav .nav-link:hover {
            color: #e3c100 !important;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#001f3f;">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand fw-bold" style="color:#e3c100;" href="{{ route('home') }}">Zoetic</a>

                <!-- Bouton mobile -->
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu aligné à droite -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('home') ? 'fw-bold' : '' }}" href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('about') ? 'fw-bold' : '' }}" href="{{ route('about') }}">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('services') ? 'fw-bold' : '' }}" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('inscription.store') ? 'fw-bold' : '' }}" href="{{ route('inscription.store') }}">Inscription formation</a>
                        </li>

                        <!-- Lien connexion admin -->
                        <li class="nav-item">
                            <a class="nav-link text-warning {{ request()->routeIs('admin.login') ? 'fw-bold' : '' }}" href="{{ route('admin.login') }}">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-4 flex-grow-1">
        @yield('content')
    </main>

    <footer class="text-center py-3 mt-4" style="background-color:#001f3f; color:#ffffff;">
        <p class="mb-0">© {{ date('Y') }} Zoetic. Tous droits réservés.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
