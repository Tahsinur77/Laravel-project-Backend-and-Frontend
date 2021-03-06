<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="{{asset('css/topnav.css')}}">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/picturePreview.css')}}">

  <link rel="stylesheet" href="{{asset('productDetails.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}"> 
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

  <title>Document</title>
</head>
<body>
  @include('inc.header')

  <div>
     @yield('products')
  </div>

  <div>
       @yield('addProducts')
  </div>

  <div>
       @yield('productList')
  </div>

  <div>
       @yield('about')
  </div>

  <div>
     @yield('contact')
  </div>

  <div>
     @yield('productDetails')
  </div>

 

  <div>
     @yield('orderDetails')
  </div>

  <div>
     @yield('unsold')
  </div>

  <div>
     @yield('unsoldOrderDetails')
  </div>

  <br><br><br><br>
  @include('inc.Footer')
  
</body>
</html>