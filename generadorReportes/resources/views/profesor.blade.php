@extends('layouts.master')
<html>

<head>
    <title>Tabla Profesores</title>
</head>
@section('content')

<body class="index_main">

    <div class="table_box">
        <table id="tabla" class="table table-striped table-responsive" style="width:100%">
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
</body>

@endsection

</html>