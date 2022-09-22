<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <title>Generador de Reportes</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="navbar-brand" href="#">
            <img src="{{ asset('images/uctlogo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                Universidad Católica de Temuco
        </div>
        <div class="navbar-brand" href="#">
        </div>
    </nav>
    @yield('content')
</body>
</html>