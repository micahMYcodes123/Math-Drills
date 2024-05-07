<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    <!-- Font Icon -->
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset("web/style.css")}}">
    <link rel="stylesheet" href="{{asset("web/stylel.css")}}">

    <link rel="stylesheet" href="{{asset("web/auths.css")}}"></head>
<body>


    @yield('content')


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>