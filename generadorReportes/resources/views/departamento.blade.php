@extends('layouts.master')
<html>

<head>
    <title>Tabla Departamentos</title>
</head>
@section('content')

<body class="index_main">
    <div class=col-md-3>
        <select class="form-control" name="tablas" id="tablas">
            <option value="Alumno">Alumno</option>
            <option value="Profesor">Profesor</option>
            <option value="Carrera">Carrera</option>
            <option value="Departamento" selected>Departamento</option>
            <option value="Gasto">Gasto</option>
            <option value="Ramo">Ramo</option>
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
                    <th scope="col">Id del departamento</th>
                    <th scope="col">Nombre del departamento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departamentos as $item)
                <tr>
                    <th scope="row">{{$item->ID_Departamento}}</th>
                    <td>{{$item->Nombre_Departamento}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br><br><br>
</body>


@endsection

</html>