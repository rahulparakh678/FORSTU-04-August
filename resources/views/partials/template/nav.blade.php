<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light header__menu">
        <div class="container">
            <!-- Logo -->
            
            <a href="http://www.forstu.co/"><img src="{{asset('external/img/logo3.png')}}" alt="" height="50" class="navbar-brand" alt="Logo"></a>

            <!-- Hamburger Menu Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="float: right;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto" style="float: right;">
                    @auth
                    <li class="nav-item">
                        <a class="" href="{{ route('aboutus') }}">About Us</a>
                    </li>
                    
                    
                    <li>
                                    @if(Auth::user()->user_type ==='student')
                                    <a href="{{route('students.home')}}">View Dashboard</a>

                                    @elseif(Auth::user()->user_type ==='sfcngo')
                                    <a href="{{route('sfc.home')}}">SFC Dashboard</a>

                                    @elseif(Auth::user()->user_type ==='provider')
                                    <a href="{{route('providers.home')}}">SMS Dashboard</a>

                                    @else
                                    <a href="{{route('admin.home')}}"> Admin Dashboard</a>
                                    @endif
                                </li>
                                @else
                                    <li class="nav-item">
                                    <a class="" href="{{ route('aboutus') }}">About Us</a>
                                    </li>
                                    <li class="nav-item"><a href="{{route('login')}}">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                Login</a></li>
                                    <li class="nav-item"><a href="{{route('register')}}" onMouseOver="this.style.color=''"
        onMouseOut="this.style.color=''" style="background-color: #88C417;padding: 10px 10px;" ><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Register Now </a></li>

                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

