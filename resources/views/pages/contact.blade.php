@extends('main')

@section('title', '| Contact')

@section('code')

<link rel="stylesheet" href="{{ asset('css/contact.css') }}">


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
      <a class="navbar-brand" href="{{ url('/') }}"><span id="naamlog">Yarno</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
        <li><a href="{{ url('team') }}">Team</a></li>
        <li><a href="{{ url('gallery') }}">Gallery</a></li>
        <li  class="active"><a href="{{ url('contact') }}">Contact <span class="sr-only">(current)</span></a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('ronay') }}"><i class="fa fa-youtube-play" aria-hidden="true"></i>Ronay</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        @include('partials._messages')
<h1 class="col-md-12 text">Mail mij:</h1>

<div class="container">






<div class="row col-md-12 well" id="contact">

{!! Form::open() !!}

        {{ Form::label('naam', 'Naam:') }}
        {{ Form::text('naam', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Typ hier je naam...']) }}

        {{ Form::label('email', 'Email:', ['class' => 'form-spacing-top']) }}
        {{ Form::email('email', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'voorbeeld@voorbeeld.com...']) }}

        {{ Form::label('bericht', 'Bericht:', ['class' => 'form-spacing-top']) }}
        {{ Form::textarea('bericht', null, ['class' => 'form-control ', 'required' => '', 'placeholder' => 'Typ hier je bericht...']) }}

        {{ Form::submit('Verstuur', ['class' => 'btn btn-danger btn-block form-spacing-top-btn']) }}

{!! Form::close() !!}

</div>
</div>

@endsection
