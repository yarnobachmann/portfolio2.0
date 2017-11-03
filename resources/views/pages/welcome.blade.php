@extends('main')

@section('code')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<script type="text/javascript" src="{{ asset('/js/jquery.flipping_text.js') }}" ></script>
<script>
 $(document).ready(function(){
  	  $(".intro").flipping_text({
  	    tickerTime: 50,
  	    tickerCount: 5,
        customRandomChar: "!@#$%^&*"
  	  });
  });

</script>
<script>
$(document).ready(function(){
    $("#menuopenknop").click(function(){
        $("h6").toggle(500);
    });
});
</script>
@endsection

@section('header')

<div id="head" class="stage">
           @include('partials._messages')
    <div class="stage-caption">

        <img src="../img/logo/logo.png" alt="mijn logo" class="hidden-md-down" id="logo" width="30%">
        <h1 class="display-3"><span class="intro">Ik ben </span> <span id="naam" class="intro" data-delay="1800">Yarno</span></h1>

        <hr>

        <p>Ik studeer <b>applicatie</b> <b>ontwikkeling</b> op het <b>drenthecollege</b> en werk met talen waaronder <b>php</b> , <b>html</b> , <b>css</b> en het php framework <b>Laravel</b>.</p>

        <hr>

        <ul class="social">
            <li><a href="https://www.facebook.com/Yarno-1409931245726550/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://plus.google.com/u/0/104927242142232708032" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.instagram.com/yarnobachmann/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/jarno-bachmann-3b1022137/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
        <nav class="menu">
          <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open">
          <label id="menuopenknop" class="menu-open-button" for="menu-open">
            <span class="lines line-1"></span>
            <span class="lines line-2"></span>
            <span class="lines line-3"></span>
          </label>

          <a href="#" class="menu-item item-1"></a>
          <a href="{{ url('contact') }}" class="menu-item item-2"><i class="fa fa-envelope mail" aria-hidden="true"></i><h6 id="menu_text">contact</h6></a>
          <a href="{{ url('team') }}" class="menu-item item-3"><i class="fa fa-users team" aria-hidden="true"></i><h6 id="menu_text">team</h6></a>
          <a href="#" class="menu-item item-4"></a>
          <a href="#" class="menu-item item-5"></a>
          <a href="{{ url('portfolio') }}" class="menu-item item-6"><i class="fa fa-user portfolio" aria-hidden="true"></i><h6 id="menu_text">portfolio</h6></a>
        </nav>

    </div>

</div>
@endsection

@section('content')



@endsection
