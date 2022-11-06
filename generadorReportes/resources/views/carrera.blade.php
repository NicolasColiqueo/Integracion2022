@extends('layouts.master')
<html>

<head>
    <title>Tabla Carreras</title>
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
                    <th scope="col">Id de carrera</th>
                    <th scope="col">Nombre de la carrera</th>
                    <th scope="col">Id del departamento</th>
                    <th scope="col">Id del tipo de carrera</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carreras as $item)
                <tr>
                    <th scope="row">{{$item->Id_Carrera}}</th>
                    <td>{{$item->Nombre_Carrera}}</td>
                    <td>{{$item->Id_Departamento}}</td>
                    <td>{{$item->Id_Tipo_Carrera}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br><br><br>
</body>


@endsection

</html>