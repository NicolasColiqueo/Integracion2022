@extends('layouts.master')
<html>

<head>
    <title>Tabla Ramos</title>
</head>
@section('content')

<body class="index_main">
    <div class=col-md-3>
        <select class="form-control" name="tablas" id="tablas">
            <option value="Alumno">Alumno</option>
            <option value="Profesor">Profesor</option>
            <option value="Carrera">Carrera</option>
            <option value="Departamento">Departamento</option>
            <option value="Gasto">Gasto</option>
            <option value="Ramo" selected>Ramo</option>
            <option value="TipoCarrera">Tipo Carrera</option>
        </select>
    </div>
    <div class=col-md-3>
        <button class="btn btn-primary rounded" type="submit" id="cambio_tabla" name="cambio_tabla">Cambiar</button>
    </div>
    <div class="table_box">
        <table id="tabla" class="table table-striped table-responsive" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Id del ramo</th>
                    <th scope="col">Nombre del ramo</th>
                    <th scope="col">Id de carrera</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ramos as $item)
                <tr>
                    <th scope="row">{{$item->Id_Ramo}}</th>
                    <td>{{$item->Nombre_Ramo}}</td>
                    <td>{{$item->Id_Carrera}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br><br><br>
</body>


@endsection

</html>