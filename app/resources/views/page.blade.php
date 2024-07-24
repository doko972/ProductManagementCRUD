<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-brand"><h3>Liste de Produits</h3></div>
            <div class="navbar-menu" id="navbar-menu">
                <a href="{{ route('product.index') }}"><h3>Accueil</h3></a>
                <a href="{{ route('product.create') }}"><h3>Ajouter</h3></a>
            </div>
        </nav>
    </header>

    @section('content')
    @show 
</body>

</html>