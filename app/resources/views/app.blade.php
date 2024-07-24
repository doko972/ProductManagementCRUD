<!DOCTYPE html>
<html lang="fe">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/styles.css')
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">LaravelApp</div>
        <div class="navbar-toggle" id="navbar-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="navbar-menu" id="navbar-menu">
            <a href="#">Home</a>
            <a href="#">Features</a>
            <a href="#">Pricing</a>
            <a href="#">Contact</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script>
        // Ajoutez le JavaScript directement ici ou dans votre fichier JS
        document.getElementById('navbar-toggle').addEventListener('click', function() {
            var menu = document.getElementById('navbar-menu');
            if (menu.classList.contains('show')) {
                menu.classList.remove('show');
            } else {
                menu.classList.add('show');
            }
        });
    </script>
</body>
</html>