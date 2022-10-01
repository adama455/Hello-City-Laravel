@extends('base')

@section('title',  config('app.name'))


@section('contenu')

    <h1>Hello from Sénégal!</h1>

    <p>It's currently {{date("H:i A")}} .</p>

@endsection

