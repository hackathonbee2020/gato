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
                            <h3 class="card-title">Formulário de cadastro de usuário</h3>
                        </div>
                        <form method="POST" action="{{route('users.store')}}" role="form">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nome <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Nome Completo" maxlength="250" value="{{old('name')}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <span class="text-red">*</span></label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Endereço de e-mail" maxlength="250" value="{{old('email')}}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="city">Cidade <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="city"
                                        placeholder="Ex: Mossoró - RN" maxlength="250" value="{{old('city')}}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefone <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="phone"
                                        placeholder="Ex: 84 00000-0000" maxlength="13" value="{{old('phone')}}"
                                        required>
                                </div>
                                <div class="form-group ">
                                    <label for="email">Senha <span class="text-red">*</span></label>
                                    <input id="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>
                                </div>
                                <div class="form-group ">
                                    <label for="email">Confirmação de senha <span class="text-red">*</span></label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('users.index')}}" class="btn btn-default">Cancelar</a>
                                <button type="submit" class="btn btn-warning float-right">Cadastrar usuário</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
