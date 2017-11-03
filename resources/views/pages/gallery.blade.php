@extends('main')


@section('code')

<link rel="stylesheet" href="{{ asset('css/stylingGallery.css') }}">
<link rel="stylesheet" type="text/css" href="/css/default.css" />
<link rel="stylesheet" type="text/css" href="/css/component.css" />
<script src="/js/modernizr.custom.js"></script>

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
          <li><a href="{{ url('portfolio') }}">Portfolio </a></li>
          <li><a href="{{ url('team') }}">Team</a></li>
          <li class="active"><a href="{{ url('gallery') }}">Gallery<span class="sr-only">(current)</span></a></li>
          <li><a href="{{ url('contact') }}">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('80s') }}"><span class="backto" >back to the 80s</span></a></li>
            <li><a href="{{ url('ronay') }}"><i class="fa fa-youtube-play" aria-hidden="true"></i>Ronay</a></li>

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>









    <div class="container">
      <div class="main">
        <ul id="og-grid" class="og-grid">
              @foreach($images as $image)
          <li>
            <a href="#" data-largesrc="/storage/{{ $image->image }}" data-title="{{ $image->title }}" data-description="{{ $image->description }}">
              <img src="/storage/{{ $image->image }}" alt="#" class="img-responsive" style="height: 350px; width: 460px; object-fit: cover;"/>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div><!-- /container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="/js/grid.js"></script>
    <script>
      $(function() {
        Grid.init();
        // adding more items
        $('#og-additems').on( 'click', function() {
          var $items = $( '' ).appendTo( $( '#og-grid' ) );

          Grid.addItems( $items );
          return false;
        } );
      });
    </script>
<br>
<br>
  @include('partials._footer')

  @endsection