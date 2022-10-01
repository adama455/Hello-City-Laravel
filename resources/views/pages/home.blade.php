@extends('base')

@section('title',  config('app.name'))


@section('contenu')

    <img src="{{asset('images/drapeau-senegal.png')}}" alt="senegal" class="rounded shadow_md h-40">

    <h1 class="text-3xl sm:text-5xl font-semibold mt-5 text-indigo-600">Hello from Sénégal!</h1>

    <p class=" text-lg text-gray-800">It's currently {{date("H:i A")}} .</p>

@endsection

