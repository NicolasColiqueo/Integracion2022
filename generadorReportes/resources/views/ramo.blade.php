@extends('layouts.master')
<html>

<head>
    <title>Tabla Ramos</title>
</head>
@section('content')

<body class="index_main">

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