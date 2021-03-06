@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Controle de Usuários</h1>
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
                            <h3 class="card-title">Formulário de edição de usuário</h3>
                        </div>
                        <form method="POST" action="{{route('roles.update',$role->id)}}" role="form">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nome <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Ex: admin" maxlength="250" value="{{$role->name}}"
                                        required>
                                    @if ($errors->has('name'))
                                        <span class="error invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="display_name">Nome de exibição</label>
                                    <input type="text" class="form-control" name="display_name"
                                        placeholder="Ex: Administrador" maxlength="250" value="{{$role->display_name}}"
                                        required>
                                    @if ($errors->has('display_name'))
                                        <span class="error invalid-feedback">
                                            {{ $errors->first('display_name') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description">Descrição</label>
                                    <input type="text" class="form-control" name="description"
                                        placeholder="Ex: Tem acesso as funcionalidades de editar e criar usuario" maxlength="250" value="{{$role->description}}"
                                        required>
                                    @if ($errors->has('description'))
                                        <span class="error invalid-feedback">
                                            {{ $errors->first('description') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Permissões</label>
                                    <select class="form-control select2 select2-warning" data-dropdown-css-class="select2-warning" multiple="multiple" name="permissions[]"  data-placeholder="Selecione as permissões" style="width: 100%;">
                                        @forelse($permissions as $p)
                                            <option value="{{ $p->id }}" {{ in_array($p->id, $role_permissions)? 'selected' : '' }}>{{$p->display_name}}</option>
                                        @empty
                                            <option disabled>Nenhuma permissão cadastrada</option>
                                        @endforelse
                                    </select>
                                    @if ($errors->has('permissions'))
                                        <span class="error invalid-feedback">
                                            {{ $errors->first('permissions') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('roles.index')}}" class="btn btn-default">Cancelar</a>
                                <button type="submit" class="btn btn-warning float-right">Salvar Alterações</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

