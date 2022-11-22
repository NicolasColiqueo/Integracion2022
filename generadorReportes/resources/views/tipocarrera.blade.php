@extends('layouts.master')
<html>

<head>
    <title>Tabla Tipo Carrera</title>
</head>
@section('content')

<body class="index_main">

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