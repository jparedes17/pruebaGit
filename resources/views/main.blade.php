<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .row.content {height: 550px}
    
    .sidenav {
      background-color: #E96017;
      height: 119%;
    }
        
    @media screen and (max-width: 1000px) {
      .row.content {height: auto;} 
    }

    a {
     color:white;
    }

    img {
        display: block;
        margin: auto;
    }
  </style>
</head>
<body>


<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="">Prueba</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('clientes') }}" style="color: white;">Clientes</a></li>
        <li style="color: white;"><a href="{{ route('direcciones') }}" >Direcciones</a></li>
        <li><a href="{{ route('ventas') }}">Ventas</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2 href ="{{ route('direcciones') }}" ><a href="{{ route('main') }}" style="color: #000000;">PruebaJorgeP</a></h2>
      <ul class="nav nav-stacked">
        <li class="active"><a href="{{ route('clientes') }}">Clientes</a></li>
        <li><a href="{{ route('direcciones') }}">Direcciones</a></li>
        <li><a href="{{ route('ventas') }}">Ventas</a></li>
      </ul><br>
    </div>
    <br>
<img src="{{ asset('images/123-01.png') }}" alt="">
    <div class="container">
    @yield('seccion')
    </div>
</body>
</html>