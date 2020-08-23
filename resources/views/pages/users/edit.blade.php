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
                        <form method="POST" action="{{route('users.update',$user->id)}}" role="form">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nome <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Nome Completo" maxlength="250" value="{{$user->name}}"
                                        required>
                                    @if ($errors->has('name'))
                                        <span class="error invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <span class="text-red">*</span></label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Endereço de e-mail" maxlength="250" value="{{$user->email}}"
                                        required>
                                    @if ($errors->has('email'))
                                        <span class="error invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="city">Cidade <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="city"
                                        placeholder="Ex: Mossoró - RN" maxlength="250" value="{{$user->city}}"
                                        required>
                                    @if ($errors->has('city'))
                                        <span class="error invalid-feedback">
                                            {{ $errors->first('city') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefone <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="phone"
                                        placeholder="Ex: 84 00000-0000" maxlength="13" value="{{$user->phone}}"
                                        required>
                                    @if ($errors->has('phone'))
                                        <span class="error invalid-feedback">
                                            {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="updatePassword">
                                        <label class="custom-control-label" for="updatePassword">Alterar senha?</label>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="email">Senha</label>
                                    <input id="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" disabled="true">
                                    @if ($errors->has('password'))
                                        <span class="error invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group ">
                                    <label for="email">Confirmação de senha</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" disabled="true">
                                    @if ($errors->has('password-confirm'))
                                        <span class="error invalid-feedback">
                                            {{ $errors->first('password-confirm') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('users.index')}}" class="btn btn-default">Cancelar</a>
                                <button type="submit" class="btn btn-warning float-right">Salvar Alterações</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $('#updatePassword').click(function (e) {
            const canUpdatePassword = e.target.checked;

            $("#password").prop("disabled", !canUpdatePassword);
            $("#password-confirm").prop("disabled", !canUpdatePassword);
        });
    </script>
@endsection
