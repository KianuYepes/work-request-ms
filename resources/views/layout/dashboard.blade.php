<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href={{ asset('assets/css/styles.css') }}> -->
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/dashboard.css') }}>
    <!-- <script src={{ asset('assets/js/login.js') }}></script> -->
    
</head>
<body>
    @yield('content')

</body>
</html>