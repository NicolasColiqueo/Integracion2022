@extends('layouts.master')
<html>

<head>
    <title>Index</title>
</head>
@section('content')

<body class="index_main">
    <form action="{{ route('tabla.profesores') }}" method="post">
        @csrf
        <button class="btn btn-danger" type="submit"><a>Profesores</a></button>
    </form>
    <div class="col-md-4">
        <form action="/searchalumno" method="get">
            <div class="form-group">
                <input type="search" name="searchalumno" class="form-control">
                <span class="form-group-btn">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </span>
            </div>
        </form>
    </div>
    <div class="table_box">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">RUT</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Año de ingreso</th>
                    <th scope="col">Id de carrera</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $item)
                <tr>
                    <th scope="row">{{$item->Rut_Alumno}}</th>
                    <td>{{$item->Nombres}}</td>
                    <td>{{$item->Apellidos}}</td>
                    <td>{{$item->Correo}}</td>
                    <td>{{$item->Anho_Ingreso}}</td>
                    <td>{{$item->Id_Carrera}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $alumnos->links() }}
</body>
@endsection

</html>