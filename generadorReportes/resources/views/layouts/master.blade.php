<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/javascript.js') }}"></script>
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Generador de Reportes</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">

        <img src="{{ asset('images/uctlogo.png') }}" width="60" height="60" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="#">&nbsp&nbspUniversidad Católica de Temuco</a>
        @if(Auth::check())
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login.check')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('nav.uct')}}">UCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('nav.contacto')}}">Contacto</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <form class="nav_right" action="{{ route('user.logout') }}" method="post">
                    @csrf
                    <img src="{{ asset('images/user.png') }}" width="60" height="60" class="d-inline-block align-top" alt="">
                    &nbsp&nbsp{{ auth()->user()->name }} &nbsp&nbsp
                    <button class="btn btn-danger" type="submit"><a>Logout</a></button>
                </form>
            </ul>
        </div>
        <span class="navbar-text">
        </span>
        @endif
    </nav>
    @yield('content')
</body>

<footer> © 2021-2030 private copyright security </footer>

</html>