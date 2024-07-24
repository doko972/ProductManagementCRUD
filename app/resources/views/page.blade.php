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
                <h3>{{ $title }}</h3>
            </div>
            <div class="navbar-menu" id="navbar-menu">
                <a href="{{ route('product.index') }}">
                    <h3>{{ $home }}</h3>
                </a>
                <a href="{{ route('product.create') }}">
                    <h3>{{ $add }}</h3>
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
        <!-- <a class="footer-reseaux__link" href="https://github.com/doko972/ProductManagementCRUD.git" target="_blank" aria-label="Lien vers dépot Github">
            <img class="footer-reseaux__ico" src="../img/github-svgrepo-com.svg" alt="GitHub"> -->
            @svg 
        </a>
    </div>
        <p>Doko972</p>
    </footer>
</body>

</html>