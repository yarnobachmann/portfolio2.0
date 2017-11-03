
@extends('beautymail::templates.sunny')

@section('content')

    <img src="http://www.yarnobachmann.nl/img/logo/logo.png" alt="logo">

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Hallo!',
        'level' => 'h1',
    ]) <p>{{ $naam }}</p>

    @include('beautymail::templates.sunny.contentStart')

        <p>{{ $bericht }}</p>
        <br>
        <p>Gestuurd via {{ $email }}</p>

    @include('beautymail::templates.sunny.contentEnd')
          
@stop
