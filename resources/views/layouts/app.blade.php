<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ZoeTIC - Prestations & Formations</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Ton CSS personnalisé -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    <header class="bg-dark text-white p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h3">ZoeTIC</h1>
            <nav>
                <a href="{{ route('home') }}" class="btn btn-outline-light btn-sm">Accueil</a>
                <a href="#" class="btn btn-outline-light btn-sm">Services</a>
                <a href="#" class="btn btn-outline-light btn-sm">Formations</a>
                <a href="#" class="btn btn-outline-light btn-sm">Blog</a>
                <a href="#" class="btn btn-warning btn-sm">Contact</a>
            </nav>
        </div>
    </header>

    <main class="container py-5">
        @yield('content')
    </main>

    <footer class="bg-light text-center py-3 mt-5 border-top">
        <p class="mb-0">&copy; {{ date('Y') }} ZoeTIC - Tous droits réservés</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
