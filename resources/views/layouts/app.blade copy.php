<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Definindo um layout padrão para o APP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Exemplo Laravel 6</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropDown" aria-controls="navbarNavDropDown" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropDown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('categories.index')}}">Categorias</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            @include("flash::message")
            @yield('content')
        </div>
    </body>
</html>
