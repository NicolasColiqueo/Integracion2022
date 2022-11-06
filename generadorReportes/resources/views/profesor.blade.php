@extends('layouts.master')
<html>

<head>
    <title>Tabla Profesores</title>
</head>
@section('content')

<body class="index_main">
<div class=col>
        <select class="fc" name="tablas" id="tablas">
            <option value="Alumno" selected>Alumno</option>
            <option value="Profesor">Profesor</option>
            <option value="Carrera">Carrera</option>
            <option value="Departamento">Departamento</option>
            <option value="Gasto">Gasto</option>
            <option value="Ramo">Ramo</option>
            <option value="TipoCarrera">Tipo Carrera</option>
        </select>
        <button class="camm btn-primary rounded" type="submit" id="cambio_tabla" name="cambio_tabla">Cambiar</button>
    </div>
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