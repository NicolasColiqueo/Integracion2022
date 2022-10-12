@extends('layouts.master')
<html>
<head>
    <title>Index</title>
</head>
@section('content')

<body class="index_main">
    <form action="{{ route('tabla.alumnos') }}" method="post">
        @csrf
        <button class="btn btn-danger" type="submit"><a>Alumnos</a></button>
    </form>
    <div class="col-md-4">
        <form action="/searchprofesor" method="get">
            <div class="form-group">
                <input type="search" name="searchprofesor" class="form-control">
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
                    <th scope="col">Sueldo</th>
                    <th scope="col">Contrato</th>
                    <th scope="col">Id de departamento</th>
                    <th scope="col">Id de carrera</th>
                </tr>
            </thead>
            <tbody>
                @foreach($profesores as $item)
                <tr>
                    <th scope="row">{{$item->Rut_Profesor}}</th>
                    <td>{{$item->Nombres}}</td>
                    <td>{{$item->Apellidos}}</td>
                    <td>{{$item->Correo}}</td>
                    <td>{{$item->Anho_Contrato}}</td>
                    <td>{{$item->Sueldo}}</td>
                    <td>{{$item->Contrato}}</td>
                    <td>{{$item->Id_Departamento}}</td>
                    <td>{{$item->Id_Carrera}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $profesores->links() }}
</body>
@endsection

</html>