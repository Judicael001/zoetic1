<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Zoetic - Site Vitrine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Survol des liens en jaune */
        .navbar-nav .nav-link:hover {
            color: #000000 !important;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#156847;">
            <div class="container">
                <!-- Logo -->
                <div class="navbar-brand fw-bold" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.jpg') }}" alt="Zoetic" style="width: 120px;">
                </div>

                <!-- Bouton mobile -->
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                    @auth
                        @if(auth()->user()->hasRole('admin'))
                            <!-- Menu admin : Liste des inscrits + icône déconnexion -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link text-white {{ request()->routeIs('admin.inscriptions') ? 'fw-bold' : '' }}" href="{{ route('admin.inscriptions') }}">
                                        Liste des inscrits
                                    </a>
                                </li>

                                <li class="nav-item dropdown ms-3">
                                    <a class="nav-link text-white d-flex align-items-center" href="#" id="adminDropdown" data-bs-toggle="dropdown">
                                        <img src="{{ asset('assets/images/admin-icon.jpg') }}" alt="Admin" style="width: 30px; height: 30px; border-radius: 50%;">
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();">
                                                Déconnexion
                                            </a>
                                            <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        @else
                            <!-- Utilisateur normal connecté : menu complet + dropdown utilisateur -->
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

                                <!-- Dropdown utilisateur -->
                                <li class="nav-item dropdown ms-3">
                                    <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" data-bs-toggle="dropdown">
                                        {{ auth()->user()->prenom ?? auth()->user()->name }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Déconnexion
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @endif
                    @else
                        <!-- Non connecté : menu classique + lien admin -->
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('home') ? 'fw-bold bg-warning' : 'text-white' }}" href="{{ route('home') }}">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('about') ? 'fw-bold bg-warning' : 'text-white' }}" href="{{ route('about') }}">À propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('services') ? 'fw-bold bg-warning' : 'text-white' }}" href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('inscription.store') ? 'fw-bold bg-warning' : 'text-white' }}" href="{{ route('inscription.store') }}">Inscription formation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.login') ? 'fw-bold bg-warning' : 'text-white' }}" href="{{ route('admin.login') }}">Se connecter</a>
                            </li>
                        </ul>
                    @endauth

                </div>
            </div>
        </nav>
    </header>



    <main class="container py-4 flex-grow-1">
        @yield('content')
    </main>

    <footer class="text-center py-3 mt-4" style="background-color:#156847; color:#ffffff;">
        <p class="mb-0">© {{ date('Y') }} Zoetic. Tous droits réservés.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
