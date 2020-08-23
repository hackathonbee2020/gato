@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Criar Canal</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Formulário de cadastro de canal</h3>
                    </div>
                    <form method="POST" action="{{route('channels.store')}}" role="form">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nome <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="name" placeholder="Ex: Bee Delivery - Mossoró" maxlength="250" value="{{old('name')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="status" placeholder="Ex: Ativo" maxlength="250" value="{{old('status')}}" required>
                            </div>

                            <div class="form-group">
                                <label for="client_id">ID do Cliente <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="client_id" placeholder="Seu ID" maxlength="2500" value="{{old('client_id')}}" required>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('channels.index')}}" class="btn btn-default">Cancelar</a>
                            <button type="submit" class="btn btn-warning float-right">Criar Canal</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@stop

@section('js')
<script>

</script>
@endsection