@extends('layouts.main')

@section('title', 'Editando')

@section('content')

    <div id="user-create-container" class="col-md-6 offset-md-3">
        <h3 class="fw-bold">
            <ion-icon name="create-outline"></ion-icon>Editando
        </h3>
        <form action="{{ route('users.update', $user->id) }}" method="POST" id="form">

            @csrf

            @method('PUT')

            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>


            <div class="form-group">
                <label for="date_birth">Data de nascimento:</label>
                <input type="text" class="datepicker form-control" id="date_birth" name="date_birth"
                    placeholder="Data de Nascimento" value="{{ $user->date_birth }}" readonly>

            </div>


            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}">
            </div>


            <p class="fw-bold"> Criado em: {{ $user->created_at->format('d/m/Y h:m:s') }}</p>

            <a class="btn btn-dark" href="{{ route('users.index') }}">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Editar Usuario">
        </form>
    </div>

    @yield('content')


@endsection
