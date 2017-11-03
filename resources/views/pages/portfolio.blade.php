@extends('main')


@section('code')

<link rel="stylesheet" href="{{ asset('css/styling.css') }}">


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
          <li class="active"><a href="{{ url('portfolio') }}">Portfolio <span class="sr-only">(current)</span></a></li>
          <li><a href="{{ url('team') }}">Team</a></li>
          <li><a href="{{ url('gallery') }}">Gallery</a></li>
          <li><a href="{{ url('contact') }}">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('80s') }}"><span class="backto" >back to the 80s</span></a></li>
            <li><a href="{{ url('ronay') }}"><i class="fa fa-youtube-play" aria-hidden="true"></i>Ronay</a></li>

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="9000" id="bs-carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#bs-carousel" data-slide-to="0"></li>
      <li data-target="#bs-carousel" data-slide-to="1" class="active"></li>
      <li data-target="#bs-carousel" data-slide-to="2"></li>
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
      <div class="item slides">
        <div class="slide-3"></div>
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

  <div class="container-fluid section1">
      <div class="row bruh spacing-top spacing-bottom">

        <div class="one-third column">
          <h1>Responsive</h1>
          <p>Ik probeer elke website die ik bouw zo responsive mogelijk te creëren, Dit doe ik met behulp van het css framework Bootstrap.</p>
        </div>



        <div class="one-third column">
          <h1>Te werk</h1>
          <p>
            Ik werk samen met klanten en collega's om ideeën te ontwikkelen en om te zetten in een mooi eindresultaat.
          </p>
        </div>

        <div class="one-third column">
         <h1>Programmeren</h1>
         <p>
          Ik programmeer met HTML (5), CSS (3) en een vleugje JavaScript. Ik kan ook werken met front-end en back-end frameworks zoals Bootstrap en Laravel.
         </p>
        </div>

      </div>
  </div>

  <div class="container">
    <div class="row section3">

      <h1 class="spacing-bottom">Certificaten</h1>

      <div class="col-md-3 modalnr1">
        <img class="img-responsive" id="myImg" src="img/modals/online-marketing.png" alt="online marketing">
        <div class="middle">
          <div class="text">Online marketing</div>
        </div>
      </div>
      <div class="col-md-3 modalnr1">
        <img class="img-responsive" id="myImg2" src="img/modals/security.png" alt="security">
        <div class="middle">
          <div class="text">Security</div>
        </div>
      </div>
      <div class="col-md-3 modalnr1">
        <img class="img-responsive" id="myImg3" src="img/modals/veiligInternet.png" alt="veilig internet">
        <div class="middle">
          <div class="text">Veilig internet</div>
        </div>
      </div>
      <div class="col-md-3 modalnr1">
        <img class="img-responsive" id="myImg4" src="img/modals/veiligInternet-plus.png" alt="veilig internet plus">
        <div class="middle">
          <div class="text">Veilig internet plus</div>
        </div>
      </div>

      <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->

        <img class="modal-content" id="img01">

        <img class="modal-content" id="img02">

        <img class="modal-content" id="img03">

        <img class="modal-content" id="img04">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
      </div>

    </div>
  </div>
  <div class="container-fluid section1">
     <div class="row">
       <div class="col-md-4 hidden-klein">
          <img class="laptop" src="{{ asset('img/screens/wordpresscollin.png') }}" alt="" >
        </div>

         <div class="col-md-4 hidden-klein">
            <img class="laptop" src="{{ asset('img/screens/klink.png') }}" alt="" >
         </div>

          <div class="col-md-4 hidden-klein">
            <img class="laptop" src="{{ asset('img/screens/screens.png') }}" alt="" >
          </div>
      </div>
      <div class="row bruh spacing-top">

        <div class="col-md-4 hidden-groot">
           <img class="laptop" src="{{ asset('img/screens/wordpresscollin.png') }}" alt="" >
         </div>

        <div class="one-third column">
          <h1>Wordpress</h1>
          <p>
            Wij maken websites in Wordpress het team lid: Collin Lambers. Is gespecialiseerd in het werken met Wordpress en daarom nemen wij ook projecten in wordpress aan.
            Een voorbeeld van een Wordpress website is bijvoorbeeld die van onze World of warcraft guild: <a href="http://pfuguild.nl/" id="linktext" target="_blank">pfuguild.nl</a>.
          </p>
        </div>

        <div class="col-md-4 hidden-groot">
           <img class="laptop" src="{{ asset('img/screens/klink.png') }}" alt="" >
        </div>

        <div class="one-third column">
          <h1>Laravel</h1>
          <p>
            Wij maken voornamelijk websites met het php framework laravel. Hier ben ik in gespecialiseerd, Zoals dit portfolio heb ik geprogrammeerd met Laravel. Geïnteresseerd in een website?
            laat gerust een <a href="{{ url('contact') }}" id="linktext">mailtje</a> achter.
          </p>
        </div>

        <div class="col-md-4 hidden-groot">
          <img class="laptop" src="{{ asset('img/screens/screens.png') }}" alt="" >
        </div>

        <div class="one-third column">
         <h1>Bootstrap</h1>
         <p>
           Ik programmeer ook met het CSS framework Bootstrap om de website zo responsive mogelijk te maken. Wat ik belangrijk vind aan hedendaagse websites is dat ze er ook op mobiel goed uit moeten zien.
           Want ja wie zit er nou niet op zijn mobiel?
         </p>
        </div>

      </div>
  </div>

  <div class="container">
    <div class="row section3">

      <h1>Samen Werken of inhuren?</h1>

      <p class="padding-p">
       Ik ben in te huren om een website voor jou te gaan maken, ook wil ik samen werken met andere programmeurs aan een project.
       Ben je geïnteresseerd stuur dan gerust een e-mail.
      </p>

      <p class="padding-p"><a href="{{ url('contact') }}" id="btn" class="btn" role="button">stuur een e-mail</a> </p>

    </div>
  </div>

@include('partials._footer')

@endsection

@section('scripts')

  <script src="js/modal.js"></script>

@endsection
