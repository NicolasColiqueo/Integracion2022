@extends('layouts.master')
<html>

<head>
    <title>Index</title>
</head>
@section('content')
<body>
    <h1>  {{ auth()->user()->name }}<h1>
    <p><a href="{{ route('user.logout') }}">Logout</a></p>
</body>
@endsection
</html>