@extends('front.template')

@section('pageTitle', 'Perfil de ' . $theProduct->getName())

@section('mainContent')
	<h2>Perfil de: {{ $theProduct->getName() }}</h2>

@endsection
