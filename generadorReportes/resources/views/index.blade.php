@extends('layouts.master')
<html>

<head>
    <title>Index</title>
</head>
@section('content')

<body class="index_main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="{{ asset('images/uctlogo.png') }}" width="60" height="60" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="#">&nbsp&nbspUniversidad Católica de Temuco</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <form class= "nav_right" action="{{ route('user.logout') }}" method="post">
                    @csrf
                    <img src="{{ asset('images/user.png') }}" width="60" height="60" class="d-inline-block align-top" alt="">
                    &nbsp&nbsp{{ auth()->user()->name }} &nbsp&nbsp
                    <button class="btn btn-danger" type="submit"><a>Logout</a></button>
                </form>
            </ul>
        </div>
        <span class="navbar-text">
        </span>
    </nav>
    <div class="table_box">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">RUT</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $item)
                <tr>
                    <th scope="row">{{$item->Rut_Alumno}}</th>
                    <td>{{$item->Nombres}}</td>
                    <td>{{$item->Apellidos}}</td>
                    <td>{{$item->Correo}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection

</html>