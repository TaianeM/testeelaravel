@extends('layouts.main')

@section('title', 'Usuarios')

@section('content')
    <script type="text/javascript" src="resources/views/users/js/jquery.mask.min.js"></script>


    <h2 class="container fw-bold align-middle">
        <i class="fa fa-address-card" aria-hidden="true"></i>
        Usuários cadastrados
    </h2>

    <table class="table table-bordered border-dark border-3 container align-middle">
        <thead>
            <tr class="table-primary">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Criado</th>
                <th scope="col">Ações</th>

            </tr>

        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->id }}</td>
                    <td class="border px-4 py-2">{{ $user->name }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2">{{ $user->created_at->format('d/m/Y h:i:s') }}</td>
                    <td class="border px-4 py-2">
                        <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Editar</a>
                        </a>
                        <a data-toggle="modal" id="deleteButton" data-target="#deleteModal"
                            data-attr="{{ route('delete', $user->id) }}" title="Delete Project" class="btn btn-danger">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>




    <!-- MODALDELETE -->
    <div class="modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="deleteBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    @yield('content')
@endsection
