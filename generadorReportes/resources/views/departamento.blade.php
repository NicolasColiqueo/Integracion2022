@extends('layouts.master')
<html>

<head>
    <title>Tabla Departamentos</title>
</head>
@section('content')

<body class="index_main">
    
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