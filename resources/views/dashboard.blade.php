@extends('layouts.layout')

@section('content')

    <p>User : {{ auth()->user()->name }}</p>
        <a href="{{ route('devis.create') }}">Devis & facture</a><br>
        <a href="{{ route('event.create') }}">Evènement</a><br>
        <a href="{{ route('user.create') }}">Créer un utilisateur<a>
    {{-- <a href="{{ route('sortie.create') }}">Créer une sortie</a> --}}

@endsection
