@extends('base')

@section('title',  'About Us | ' .config('app.name'))
   

@section('contenu')
    <img src="{{asset('images/laravel.png')}}" alt="senegal"  class="rounded shadow_md h-40">

    <p class="mt-3">Build with  <span class="text-pink-500">&hearts;</span> by LES APPRENENTS.</p>
    <p><a href="{{route('home')}}" class="text-indigo-600 underline"> Revenir à la page d'accueil</a></p>

@endsection
