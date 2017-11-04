<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yarno's Portfolio | 80s</title>
    <link rel="stylesheet" href="/css/80.css">
    <style>
    img[alt="www.000webhost.com"] {
        display: none;
    }
    </style>
  </head>
  <body>
    <audio autoplay loop id="myaudio">
      <source src="/img/80/80.mp3">
    </audio>
    <div class="">
      <img class="logo" src="/img/80/logo.png" alt="logo" draggable="false" >
    </div>
    <div class="center">
      <img class="tv" src="/img/80/TV.png" alt="tvtext" draggable="false">
    </div>
    <div class="">
      <img class="me" src="/img/80/me.png" alt="ik mezelf en mij" draggable="false">
    </div>
    <div class="animated bounce">
      <a href="{{ url('contact') }}"><img class="samenwerken" src="/img/80/samen.png" alt="samenwerken?" draggable="false" ></a>
    </div>
    <div class="">
      <a href="{{ url('portfolio') }}"><img class="back-btn" src="/img/80/back-btn.png" alt="back button" draggable="false"></a>
    </div>
    <script>
    var audio = document.getElementById("myaudio");
    audio.volume = 0.1;
  </script>
  </body>
</html>
