@extends('base')

@section('title',  config('app.name'))


@section('contenu')

    <img src="{{asset('images/drapeau-senegal.png')}}" alt="senegal">

    <h2 class="text-center">Hello from Sénégal!</h2>

    <p>It's currently {{date("H:i A")}} .</p>

@endsection

