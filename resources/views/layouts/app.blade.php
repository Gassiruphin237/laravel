<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Les meta tags pour le SEO -->
    @yield('meta')

    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="/css/app.css">

    @yield('styles')

</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary sticky-top">
        <div class="container">
            <a href="{{ route('root') }}" class="navbar-brand">
                <img class="logo" src="/img/logo.jpg" alt="Logo">
                <span class="ml-2"> Pizzaria</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#menuContent" aria-controls="menuContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="menuContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('root') }}"
                            class="nav-link {{ request()->routeIs('root') ? 'active' : '' }}">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            Acceuil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cart') }}"
                            class="nav-link {{ request()->routeIs('cart') ? 'active' : '' }}">
                            <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                            Mon panier
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-bell " aria-hidden="true"></i>
                            Notification
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-user" aria-hidden="true"></i>
                            Mon profile
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-user" aria-hidden="true"></i>
                            Paramètre
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="dropdown-item btn btn-warning">
                                <form action="" Method="POST">
                                    <button class="btn btn-warning" id="btn" type="submit"
                                        name="deconnexion">Déconnexion</button>
                                </form>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-moon"></i>
                                Thème
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <main class="container py-5">
        @yield('content')
    </main>

    <footer class="container-fluid bg-light footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <span>Le goût dans la saveur de la pizza</span>
                    <small class="d-block mb-3 text-muted">&copy; 2022</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Liens utiles</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="home.php">Acceuil</a></li>
                        <li><a class="text-muted" href="panier.php">Mon panier</a></li>
                        <li><a class="text-muted" href="livreur.php">Devenir Livreur</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Nos Partenaires</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Orange Digital Center</a></li>
                        <li><a class="text-muted" href="#">SABC</a></li>
                        <li><a class="text-muted" href="#">IUC</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Nos Services</h5>
                    <ul class="list-unstyled text-small">
                        <li><span class="text-muted" href="#">Commande des pizza</span></li>
                        <li><span class="text-muted" href="#">Livraison à Domicile</span></li>
                        <li><span class="text-muted" href="#">Evenementielle</span></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">+237 697 814 134</a></li>
                        <li><a class="text-muted" href="#">Douala-Logpom</a></li>
                        <li><a class="text-muted" href="#">gassiruphin@gmail.com</a></li>
                        <li><a class="text-muted" href="#">Politique de confidentialité</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="/js/app.js"></script>
    <script>
        const currentlocation = location.href;
        const menu = document.querySelectorAll('ad');
        const menulenghth = menu.length
        for (let i = 0; i < menulenghth; i++) {
            if (menu[i].href === currentlocation) {
                menu[i].className = "active !important"

            }
            console.log(menu[i].className);
        }
    </script>
    @yield('js')
</body>

</html>
