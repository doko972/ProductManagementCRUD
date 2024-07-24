<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/styles.css')
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-brand">Liste de Produits</div>
            <div class="navbar-menu" id="navbar-menu">
                <a href="{{ route('product.index') }}">Accueil</a>
                <a href="{{ route('product.create') }}">Ajouter</a>
            </div>
        </nav>
    </header>

    @section('content')
    @show 
</body>

</html>