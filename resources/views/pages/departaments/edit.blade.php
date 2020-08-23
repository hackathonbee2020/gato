@permission('edit-departament')
@extends('layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Controle de Departamentos</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mr-auto ml-auto">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Formulário de cadastro de departamento</h3>
                        </div>
                        <form method="POST" action="{{route('departaments.update',$id)}}" role="form">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nome do departamento<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Ex. Suporte de TI" maxlength="250" value="{{old('name')}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Status<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="status"
                                        placeholder="1-Ativo 2-Inativo" maxlength="1" value="{{old('name')}}" required>
                                </div>
                                
                                <div class="clearfix"></div>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('departaments.index')}}" class="btn btn-default">Cancelar</a>
                                <button type="submit" class="btn btn-warning float-right">Atualizar departamento</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@endpermission