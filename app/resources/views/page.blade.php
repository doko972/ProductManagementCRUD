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
            <div class="navbar-brand">
                <h3>Liste des produits</h3>
            </div>
            <div class="navbar-menu" id="navbar-menu">
                <a href="{{ route('product.index') }}">
                    <h3>Accueil</h3>
                </a>
                <a href="{{ route('product.create') }}">
                    <h3>Ajouter</h3>
                </a>
            </div>
        </nav>
    </header>
    <section class="section-container">
        @section('content')
        @show 
    </section>
    <footer class="footer-reseaux">
        <div>
            <p>Doko972</p>
            <a class="footer-lnk" href="https://github.com/doko972" target="_blank"
                aria-label="Lien vers dépot Github">
                Mon Github: <img class="" src="../img/github-svgrepo-com.svg" alt="GitHub">
                
            </a>
        </div>
    </footer>
</body>

</html>