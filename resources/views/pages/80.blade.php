<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title></title>
    <link rel="stylesheet" href="/css/80.css">
  </head>
  <body>
    <audio autoplay loop id="myaudio">
      <source src="/img/80/80.mp3">
    </audio>
    <div class="">
      <img class="logo" src="/img/80/logo.png" alt="logo" >
    </div>
    <div class="center">
      <img class="tv" src="/img/80/TV.png" alt="tvtext">
    </div>
    <div class="">
      <img class="me" src="/img/80/me.png" alt="ik mezelf en mij" >
    </div>
    <div class="animated bounce">
      <a href="{{ url('contact') }}"><img class="samenwerken" src="/img/80/samen.png" alt="samenwerken?" ></a>
    </div>
    <div class="">
      <a href="{{ url('portfolio') }}"><img class="back-btn" src="/img/80/back-btn.png" alt="back button"></a>
    </div>
    <script>
    var audio = document.getElementById("myaudio");
    audio.volume = 0.1;
  </script>
  </body>
</html>
