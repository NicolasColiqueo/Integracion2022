@extends('layouts.master')
<html>

<head>
    <title>Iniciar Sesión</title>
</head>
@section('content')

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="{{ asset('images/uctlogo.png') }}" width="60" height="60" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="#">&nbsp&nbspUniversidad Católica de Temuco</a>
    </nav>
    <div class="main">
        <p class="sign" align="center">Generador de Reportes</p>
        <div class="err" style="color: red" align="center">
            @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
        </div>
        <form class="form1" action="{{ route('login.check') }}" method="POST">
            @csrf
            <input class="un " type="text" align="center" placeholder="Correo" id="email" name="email">
            <input class="pass" type="password" align="center" placeholder="Contraseña" id="password" name="password">
            <button class="submit" align="center" type="submit">Iniciar sesión</button>
            <p class="forgot" align="center"><a href="#">Recuperar contraseña</p>
        </form>
    </div>
</body>
@endsection

</html>