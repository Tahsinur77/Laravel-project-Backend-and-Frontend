<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Navbar Color Schemes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .navbar {
        margin-bottom: 1rem;
    }
    </style>
</head>

<body>

    <div class="m-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a href="{{route('welcome')}}" class="navbar-brand"><h5>Trozan Horse</h5></a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse1">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse1">
                    <div class="navbar-nav">
                        <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{route('about')}}" class="nav-item nav-link active">About Us</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link active">Contact Us</a>
                    </div>

                    <form class="d-flex ms-auto">
                        <input type="text" class="form-control me-sm-2" placeholder="Search">
                        <button type="submit" class="btn btn-outline-light">Search</button>
                    </form>

                    <div>

                        @if(Session::has('name'))
                            @if(session('type') == "customer")
                                <a style = "margin:10px" href="/customer/dash" class="btn btn-outline-light">Profile</a>
                            @elseif(session('type') == "admin")
                                <a style = "margin:10px" href="/admin/dash" class="btn btn-outline-light">Profile</a>
                            @elseif(session('type') == "manager")
                                <a style = "margin:10px" href="/admin/dash" class="btn btn-outline-light">Profile</a>
                            @else
                                <a style = "margin:10px" href="/employee/dash" class="btn btn-outline-light">Profile</a>
                            @endif
                        @else
                            <a style = "margin:10px" href="{{route('login')}}" class="btn btn-outline-light">Login</a>
                            <a href="{{route('customer.registration')}}" class="btn btn-outline-light">Registration</a>
                        @endif

                        <a href="{{route('pcBuilder')}}" class="btn btn-outline-light">PC Builder </a>
                        <a href="{{route('order.cart')}}" class="btn btn-outline-light">Cart</a>
                        <a href="{{route('logout')}}" class="btn btn-outline-light">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

        @include('inc.topnav')
    </div>



</body>

</html>