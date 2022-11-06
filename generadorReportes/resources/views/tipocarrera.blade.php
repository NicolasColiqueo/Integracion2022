@extends('layouts.master')
<html>

<head>
    <title>Tabla Tipo Carrera</title>
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
                    <th scope="col">Id Tipo Carrera</th>
                    <th scope="col">Tipo Carrera</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tipocarreras as $item)
                <tr>
                    <th scope="row">{{$item->Id_Tipo_Carrera}}</th>
                    <td>{{$item->Tipo_Carrera}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br><br><br>
</body>


@endsection

</html>