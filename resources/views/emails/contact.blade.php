
@extends('beautymail::templates.widgets')

@section('content')

	@include('beautymail::templates.widgets.articleStart')

		<h4 class="secondary"><strong>{{ $naam }}</strong></h4>
		<p>Gestuurd via {{ $email }}</p>

	@include('beautymail::templates.widgets.articleEnd')


	@include('beautymail::templates.widgets.newfeatureStart')

		<h4 class="secondary"><strong>{{ $bericht }}</strong></h4>
		

	@include('beautymail::templates.widgets.newfeatureEnd')

@stop
