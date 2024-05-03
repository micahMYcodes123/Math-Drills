<!-- Created By CodingNepal - www.codingnepalweb.com  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset("web/style.css")}}">
<link rel="stylesheet" href="{{asset("web/stylel.css")}}">

    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
<!-- content Body goes Here -->

   
    @yield('content')
    

    <!-- common JS for All files -->
    <script src="js/inQuiz/inQuiz.js"></script> 
    <script src="{{asset("web/js/inQuiz/inQuiz.js")}}"></script>
    <!-- JS Scriptt for Index blade----------- -->
    <script src="{{asset("web/js/jquery-1.11.1.min.js")}}"></script>
		<script src="{{asset("web/js/plugins.js")}}"></script>
		<script src="{{asset("web/js/app.js")}}"></script>
		<script src="{{asset("web/js/script.js")}}"></script>

        <script src="{{asset("web/js/inQuiz/audio/click.js")}}"></script>	

</body>
</html>