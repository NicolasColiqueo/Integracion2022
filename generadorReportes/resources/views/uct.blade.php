@extends('layouts.master')
<html>

<head>
    <title>UNIVERSIDAD</title>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/fixedheader/3.2.3/css/fixedHeader.dataTables.min.css" rel="stylesheet">
</head>
@section('content')

<body class="index_main">
    
    <div class="contenedor">
        <div class="asdCF">
            <img src="{{ asset('images/sf.jpg') }}" width="400" height="250" alt="">
            <h4 class="ttl">CAMPUS SAN FRANSISCO</h4>
            <p>Sede que intruye la Facultad de Ciencias Religiosas y Filosofía, como también a las Facultades de Ciencias Sociales 
                    y Humanidades, de Ciencias Jurídicas, Económicas y Administrativas, de Ciencias de la Salud, y Técnica.
                    Contando con Biblioteca Central, Aula Magna, Centro de Atención al Estudiante y Postulante,
                    el Centro de Desarrollo e Innovación de la Docencia, el Centro de Recursos
                    Tecnológicos Inclusivos, la Dirección de Admisión y Registros Académicos, 
                    el Laboratorio Clínico UC Temuco y Casino.</p>
        </div>
        <div class="asideCN">
            <img src="{{ asset('images/cn.jpg') }}" width="400" height="250"   alt="">
            <h4 class="ttl">CAMPUS SAN JUAN PABLO SEGUNDO</h4>
            <p>Sede que aloja a las Facultades de Recursos Naturales, Ingeniería, Educación y de Arquitectura, Artes y Diseño.
                 El Campus cuenta con un moderno complejo deportivo para todos sus estudiantes,
                  quienes además pueden practicar trekking en sus amplios parques. 
                  El complejo incluye Laboratorios de Acuicultura, de Limnología y Recursos Hídricos, 
                  de Ecología Aplicada y Biodiversidad, entre otros. 
                  Aquí también se encuentra el Portal del Estudiante y una Biblioteca de tres pisos.</p>
        </div>
    </div>
    <div class="map">
        <div class=mapssf>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.1630152035727!2d-72.60264558465444!3d-38.737021279595666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9614d3e562a998e3%3A0x5be36c3eebd457f1!2sUniversidad%20Catolica%20De%20Temuco%20-%20Campus%20San%20Francisco!5e0!3m2!1ses!2scl!4v1665897846448!5m2!1ses!2scl" width="620" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p class="coment">Mapa Sede San Fransisco</p>
            <p class="coment">Manuel Montt 56, Temuco, Araucanía</p>
        </div>
        <div class=mapscn>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12455.16514267264!2d-72.55759401407735!3d-38.69963828393472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9614d25bb3523b6b%3A0x6d64cbb854e11a5b!2sUniversidad%20Catolica%20de%20Temuco%20-%20Campus%20San%20Juan%20Pablo%20Segundo!5e0!3m2!1ses!2scl!4v1665897105542!5m2!1ses!2scl" width="620" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p class="coment">Mapa Sede San Juan Pablo Segundo</p>
            <p class="coment">Rudecindo Ortega 2950, Temuco, Araucanía</p>
        </div>
    </div>
</body>

@endsection

</html>