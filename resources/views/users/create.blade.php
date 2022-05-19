@extends('layouts.main')

@section('title', 'Criar Usuario')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h2 class="fw-bold">
            <ion-icon name="person-add-outline"></ion-icon> Cadastro de usuário
        </h2>
        <form action="{{ route('users.store') }}" method="POST" id=form>
            @csrf

            <div class="form-group">
                <label for="name">Nome do Usuário:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
            </div>

            <div class="form-group">
                <label for="email">Email do usuário:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="example@email.com">
            </div>

            <div class="form-group">
                <label for="date_birth">Data de nascimento:</label>
                <input type="text" class="datepicker form-control" id="date_birth" name="date_birth" data-mask="00/00/0000"
                    maxlength="10" value="dd/mm/aaaa" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="title">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
            </div>


            <a class="btn btn-dark" href="{{ route('users.index') }}">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Criar Usuário">
        </form>
    </div>
@endsection
