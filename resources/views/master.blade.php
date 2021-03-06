<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="{{asset('css/styles.css')}}"  rel="stylesheet">

    <title>{{ $title }}</title>
</head>

<body>
@include('header')

    @yield('content')

   
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>