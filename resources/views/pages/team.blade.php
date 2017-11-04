@extends('main')


@section('code')

<link rel="stylesheet" href="{{ asset('css/team.css') }}">

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
          <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
          <li class="active"><a href="{{ url('team') }}">Team <span class="sr-only">(current)</span></a></li>
          <li><a href="{{ url('gallery') }}">Gallery</a></li>
          <li><a href="{{ url('contact') }}">Contact</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('ronay') }}"><i class="fa fa-youtube-play" aria-hidden="true"></i>Ronay</a></li>

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <h1>Het Team</h1>



  <div class="container ">
    <div class="col-md-12 yarno">
      <div class="thumbnail right-caption span4">
      <img src="img/avatar/test1.jpeg" alt="yarno">
      <div class="caption">
        <h4>Yarno Bachmann <span class="taak">web developer<span></h4>
        <p>Ik ben Yarno Bachmann , Ik studeer applicatie ontwikkeling en ben voornamelijk bezig met het php framework laravel .
          Ik maak websites met het idee mobile responsive first, Overzichtelijk en responsive vind ik 2 belangrijke punten waar ik me naar toe werk in een project.
          Voor meer informatie over mij en over mijn projecten kunt kijken op mijn portfolio.</p>
          <h6>Sterke punten:</h6>
          <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>PHP</li>
            <li>Mysql</li>
          </ul>
        <p><a href="{{ url('portfolio') }}" class="btn" role="button">Portfolio</a> </p>
      </div>
    </div>
    </div>

    <div class="col-md-12 collin">
      <div class="thumbnail right-caption span4">
      <img src="img/avatar/test2.jpg" alt="Collin">
      <div class="caption">
        <h4>Collin Lambers <span class="taak">web developer<span></h4>
        <p>Ik ben Collin Lambers, Ik studeer applicatie ontwikkeling en ben veel bezig met beveiliging. Ik maak veel websites in Wordpress waaronder ook een website voor de eerstejaar stage.
           Beheerbaarheid, kwaliteit en veiligheid vind ik 3 belangrijke punten waar ik mij in mijn werk aan houd. Voor meer info over mij, kunt u kijken op mijn portfolio.</p>
           <h6>Sterke punten:</h6>
           <ul>
             <li>Wordpress</li>
             <li>SQL</li>
             <li>PHP</li>
             <li>CSS</li>
           </ul>
        <p><a href="http://collinsportfolio.ga/" target="_blank" class="btn" role="button">Portfolio</a> </p>
      </div>
   </div>
 </div>
</div>

@include('partials._footer')

@endsection

@section('scripts')


@endsection
