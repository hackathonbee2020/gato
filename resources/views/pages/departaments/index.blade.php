@permission('show-departament')
@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Controle de Departamentos</h1>
                </div><!-- /.col -->
                @permission('add-departament')
                <div class="col-sm-6">
                    <a href="/departaments/create" class="btn btn-warning float-sm-right">Novo Departamento</a>
                </div><!-- /.col -->
                @endpermission
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
                            <h3 class="card-title">Lista de Departamentos</h3>
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
                                        <th>Status</th>
                                        <th>Cliente</th>
                                        <th style="width: 100px">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($departaments as $d)
                                        <tr>
                                            
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $d->status}}</td>
                                            <td>{{ $d->client_id}}</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{route('departaments.edit', $d->id)}}" class="btn btn-info" title="Editar">
                                                        <i class="fas fw fa-edit"></i>
                                                    </a>
                                                    <a href="#" data-departament-id="{{ $d->id }}" data-departament-name="{{ $d->name }}" class="delete-departament btn btn-danger" title="Excluir">
                                                        <i class="fas fw fa-trash"></i>
                                                        <form action="{{route('departaments.destroy', $d->id)}}"
                                                                method="POST"
                                                                id="form-destroy-{{ $d->id }}">
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
@stop

@section('js')
    <script>
        $('.delete-departament').click(function () {
            let departamentId = $(this).data('departamentId');
            Swal.fire({
                title: 'Apagar Departamento',
                text: "Você tem certeza que deseja apagar esse departamento?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, tenho certeza!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $('#form-destroy-' + departamentId).submit();
                }
            });
        });
    </script>
@endsection

@endpermission
-