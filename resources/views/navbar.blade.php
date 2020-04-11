<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>@yield('window_title')</title>
</head>
<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('users.index') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="u.a-logo" width="45" height="40">
                    users<span class="text-info">.adm</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse justify-content-between col-7" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">Home</a>
                            </li>
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.create') }}">Novo Usuário</a>
                                </li>
                            @endauth
                        </ul>
                    @auth
                        <div class="dropdown">
                            <a class="dropdown-toggle text-info" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $logedUser->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">Perfil</a>
                                <a class="dropdown-item text-danger" href="{{ route('login.logout') }}">Sair</a>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-info" href="{{ route('login.index') }}">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('login.create') }}">Registrar-se</a>
                            </li>
                        </ul>
                    @endguest
                </div>
            </div>
        </nav>
    </header>

    <section class="container">
        <h3 class="text-center mt-3 mb-4">@yield('page_title')</h3>
        @yield('page_content')
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>