<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ZoeTIC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ✅ TAILWIND CSS PAR CDN (à ne pas modifier) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- ✅ Remixicons (si tu les utilises) --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    {{-- ✅ Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body class="bg-white text-gray-800 font-['Open_Sans']">

    {{-- Barre de navigation --}}
    @include('partials.navbar')

    {{-- Contenu de la page --}}
    <main class="mt-16">
        @yield('content')
    </main>

    {{-- Pied de page --}}
    @include('partials.footer')

    {{-- Scripts JS ici si besoin --}}
</body>
</html>
