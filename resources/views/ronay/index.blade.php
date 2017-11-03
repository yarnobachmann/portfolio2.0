@extends('main')


@section('code')

<link rel="stylesheet" href="{{ asset('css/ronay.css') }}">
<link rel="stylesheet" href="css/footer-distributed.css">

@endsection


@section('content')

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><span id="naam">Yarno</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="{{ url('portfolio') }}">Portfolio </a></li>
        <li><a href="{{ url('team') }}">Team</a></li>
        <li><a href="{{ url('gallery') }}">Gallery</a></li>
        <li><a href="{{ url('contact') }}">Contact</a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="{{ url('ronay') }}"><i class="fa fa-youtube-play" aria-hidden="true"></i>Ronay <span class="sr-only">(current)</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="9000" id="bs-carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0"></li>
    <li data-target="#bs-carousel" data-slide-to="1" class="active"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>

        </hgroup>

      </div>
    </div>
    <div class="item slides  active">
     <div class="slide-2"></div>
      <div class="hero">
        <hgroup>

        </hgroup>

      </div>
    </div>
  </div>
   <a class="left carousel-control" href="#bs-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#bs-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-4 text-left">
      <h1>Ronay</h1>
      <p>Welkom op mijn website mijn naam is Yarno en ik ben naast het programmeren een youtuber.
         Waar ik mijn vlogs, games en andere videos upload.</p>
      <hr>
      <h3>Word nog aan gewerkt...</h3>
      <p></p>
    </div>
    <div class="col-sm-4">
      <div class="col-sm-2">

      </div>
     <div class="col-sm-10 panel panel-default">
      <div class="panel-heading">Pixelmon series</div>
        <div class="panel-body"><iframe src="https://www.youtube.com/embed/videoseries?list=PLy5TpRxYLFP7QuhyDHHwmgStaFPJb0sXH" frameborder="0" allowfullscreen></iframe></div>
     </div>
    </div>
    <div class="col-sm-2 sidenav">

    </div>
  </div>
</div>

@include('partials._footer')

@endsection
