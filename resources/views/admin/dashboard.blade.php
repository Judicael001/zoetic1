<!-- resources/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Tableau de Bord Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Bienvenue dans le Tableau de Bord Admin</h1>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Déconnexion</button>
        </form>
    </div>
</body>
</html>
