@extends('base')

@section('title',  'About Us | ' .config('app.name'))
   

@section('contenu')
    <img src="{{asset('images/laravel.png')}}" alt="senegal">

    <p>Build with &hearts; by LES APPRENENTS.</p>
    <p><a href="{{route('home')}}"> Revenir à la page d'accueil</a></p>

@endsection
