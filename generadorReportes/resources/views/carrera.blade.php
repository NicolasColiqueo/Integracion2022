@extends('layouts.master')
<html>

<head>
    <title>Tabla Carreras</title>
</head>
@section('content')

<body class="index_main">

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