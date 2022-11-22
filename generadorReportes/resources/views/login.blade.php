@extends('layouts.master')
<html>

<head>
    <title>Iniciar Sesión</title>
</head>
@section('content')

<body>
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
        </form>
    </div>
</body>
@endsection

</html>