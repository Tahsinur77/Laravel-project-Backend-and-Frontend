<html>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/topnav.css')}}">
</head>

<body>
    <!-- @include('inc.topnav') -->
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <div class="dropdown">
            <button class="dropbtn">Dropdown
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
    </div>
    <div>@yield('content')</div>
</body>

</html>
<!-- <script src = "{{asset('js/topnav.js')}}"></script>  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>