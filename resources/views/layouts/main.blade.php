<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/style.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <script src="/js/script.js"></script>

    </head>
    <body class="antialiased">
        <header>
            <div class="nav-top">
                <a href="/" class="navbar-brand">
                    <img src="/images/logo.png" alt="JCV">
                </a>

                <div id="search-container" class="col-md-4 search">
                    <form action="">
                        <input type="text" id="search" name="search" class="form-control" placeholder="Buscar projeto...">
                        <div class="icon-search">
                            <ion-icon name="search-outline" size="small"></ion-icon>
                        </div>
                    </form>
                </div>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Projetos</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">PHP + Laravel</a></li>
                        <li><a class="dropdown-item" href="#">Web + Frontend</a></li>
                        <li><a class="dropdown-item" href="#">Mobile</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects/create">Cadastrar Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </header>

        @yield('content')

        <footer>
            <p>Desenvolvido por Juliano Cesar Volski &copy; 2021</p>
        </footer>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
