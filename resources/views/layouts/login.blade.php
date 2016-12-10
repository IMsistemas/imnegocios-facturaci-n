<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IM facturación</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


    <style>
        body {
            font-family: 'Lato';
        }

        .fondo{
            background-image: url( background.jpg );
        }

        .fa-btn {
            margin-right: 6px;
        }

        .footer {
            position: absolute;
            bottom: 20px;
            border-top: 2px solid black;
            padding-left: 15px;
            padding-right: 15px;
            width: 100%;
        }
        .navbar-primary{
            background-color: #182678;
            border-color: #162255;
        }
        .navbar-primary .navbar-nav>li>a {
            color: #F4F4F4;
        }
        .navbar-primary .navbar-nav>li>a:focus, .navbar-primary .navbar-nav>li>a:hover {
            color: #fff;
            background-color: #192993;
            border-color: #162255;
        }
        .navbar-primary .navbar-nav>.active>a, .navbar-primary .navbar-nav>.active>a:focus, .navbar-primary .navbar-nav>.active>a:hover {
            color: #f3f3f3;
            background-color: #192993;
        }
        .form-login .input-group-addon {
            color: #f3f3f3;
            background-color: #192993;
            border: 1px solid #162255;
        }

        .btn .btn-primary{
            background-color: #182678 ;
        }
    </style>
</head>
<body id="app-layout" class="fondo">
    <nav class="navbar navbar-static-top navbar-primary">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li class="active"><a href="{{ url('/login') }}">Autenticar</a></li>
                    <li><a href="{{ url('/register') }}">Registrar</a></li>
                </ul>
            </div>
        </div>
    </nav>



    @yield('content')


    <div class="footer">
        <div style="width: 150px;margin: 0 auto;">
             <img src="http://imfa.es/ludoteca/imfa/imnegocios.png" style="height: 45px;">
        </div>
    </div>
    <!-- JavaScripts    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>





</body>
</html>
