@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Controle de Perfis de Usuários</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a href="/roles/create" class="btn btn-warning float-sm-right">Novo Perfil</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Perfis</h3>
                            <!-- Search -->
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar...">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Nome de visualização</th>
                                        <th>Descrição</th>
                                        <th>Permissões</th>
                                        <th style="width: 100px">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($roles as $role)
                                        <tr>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->display_name }}</td>
                                            <td>{{ $role->description }}</td>
                                            <td>
                                                @forelse($role->permissions as $p)
                                                    <span class="badge bg-warning">{{$p->display_name}}</span>
                                                @empty
                                                    Não há permissões
                                                @endforelse
                                            </td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{route('roles.edit', $role->id)}}" class="btn btn-info" title="Editar">
                                                        <i class="fas fw fa-edit"></i>
                                                    </a>
                                                    <a href="#" data-role-id="{{ $role->id }}" data-role-name="{{ $role->name }}" class="delete-role btn btn-danger" title="Excluir">
                                                        <i class="fas fw fa-trash"></i>
                                                        <form action="{{route('roles.destroy', $role->id)}}"
                                                                method="POST"
                                                                id="form-destroy-{{ $role->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" style="text-align: center">
                                                Nenhum registro encontrado...
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
    
@section('js')
    <script>
        $('.delete-role').click(function () {
            let roleId = $(this).data('roleId');
            let roleName = $(this).data('roleName');
            Swal.fire({
                title: 'Excluir Perfil',
                text: `Você tem certeza que deseja excluir ${roleName}?`,
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, tenho certeza!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $('#form-destroy-' + roleId).submit();
                }
            });
        });
    </script>
@endsection
