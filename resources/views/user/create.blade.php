@extends('Layouts.layout')

@section('content')
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Créer un utilisateur</h4>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" id="image-upload">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password"
                            id="password" placeholder="password" value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <input  type="file" class="dropzone form-control @error('file') is-invalid @enderror" name="file" id="file" value="https://www.fichier-pdf.fr/telecharger/?hash=mZ8rz8i9Ov1ygjZrHU56b4WH2SDrQ3zo7OF1J2z0KS25cMPsupKI0zFVO9Y2CmG8GR674BJ2P5W9D4wz7f1s4iNXRV020xttor10g11ZCz422Du9FXXqW3Y26TQq2Y07">{{ old( 'file') }} --}}
                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>
            </div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>nom</th><th>email</th><th>password</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td>{{ $client->name }}</td><td>{{ $client->email }}</td><td>{{ $client->password }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
