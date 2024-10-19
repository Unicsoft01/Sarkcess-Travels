<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/frontend/images/favicon.ico">
    <title>{{ config('app.name') }}</title>

    <!-- CSS -->
    <link href="{{ url('/') }}/frontend/css/reset.css" rel="stylesheet">
    <link href="{{ url('/') }}/frontend/css/fonts.css" rel="stylesheet">
    <link href="{{ url('/') }}/frontend/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/frontend/assets/select2/css/select2.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/frontend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/frontend/assets/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="{{ url('/') }}/frontend/assets/datepicker/css/datepicker.css" rel="stylesheet">
    <link href="{{ url('/') }}/frontend/css/custom.css" rel="stylesheet">
    @livewireStyles

</head>

<body class="fill-bg">

    {{ $slot }}

    <!-- Optional JavaScript -->
    <script src="{{ url('/') }}/frontend/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/frontend/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/frontend/assets/select2/js/select2.min.js"></script>
    <script src="{{ url('/') }}/frontend/assets/datepicker/js/datepicker.js"></script>
    <script src="{{ url('/') }}/frontend/js/custom.js"></script>
    @livewireScripts

</body>

</html>
