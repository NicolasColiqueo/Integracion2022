@extends('layouts.master')
<html>

<head>
    <title>Tabla Gastos</title>
</head>
@section('content')

<body class="index_main">
    <div class=col-md-3>
        <select class="form-control" name="tablas" id="tablas">
            <option value="Alumno">Alumno</option>
            <option value="Profesor">Profesor</option>
            <option value="Carrera">Carrera</option>
            <option value="Departamento">Departamento</option>
            <option value="Gasto" selected>Gasto</option>
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
                    <th scope="col">Id del gasto</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Id del departamento</th>
                    <th scope="col">Id de carrera</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gastos as $item)
                <tr>
                    <th scope="row">{{$item->Id_Gasto}}</th>
                    <td>{{$item->Monto}}</td>
                    <td>{{$item->Fecha}}</td>
                    <td>{{$item->Id_Departamento}}</td>
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