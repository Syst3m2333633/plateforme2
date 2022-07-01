@extends('Layouts.layout')

@section('content')

<div class="container">
    <div class="row card text-white bg-dark">
        <h4 class="card-header">Liste des clients</h4>
        <table>
            <thead>
                <tr>
                    <th>raison social</th><th>email</th><th>téléphone</th>
                    <th>nom du responsable / contact</th><th>prénom du responsable / contact</th><th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->raisonSocial }}</td><td>{{ $client->email }}</td><td>{{ $client->telephone }}</td>
                    <td>{{ $client->name }}</td><td>{{ $client->firstname }}</td>
                    <td>
                        <a href="{{ route('user.edit', ['user' => $client->id]) }}">Modifier</a>
                        {{-- <a href="{{ route('user.destroy', ['user' => $client->id]) }}">supprimer</a> --}}
                        {{-- <form method="POST" action="{{ route('user.update') }}">
                            @csrf
                            @method('PUT')
                             --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
