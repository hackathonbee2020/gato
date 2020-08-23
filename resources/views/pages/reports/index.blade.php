@permission('show-report')
@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="m-0 text-dark">Relatórios</h1>
                </div><!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="info-box mb-3 flex-row-reverse">
                                <span class="info-box-icon">
                                    <i data-feather="clock"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Esperando</span>
                                    <span class="info-box-number">180</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="info-box mb-3 flex-row-reverse">
                                <span class="info-box-icon">
                                    <i data-feather="message-circle"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Em Atendimento</span>
                                    <span class="info-box-number">90</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="info-box mb-3 flex-row-reverse">
                                <span class="info-box-icon">
                                    <i data-feather="check-square"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Finalizados</span>
                                    <span class="info-box-number">75.840</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="info-box mb-3 flex-row-reverse">
                                <span class="info-box-icon">
                                    <i data-feather="smile"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Médias</span>
                                    <span class="info-box-number">Atendimento: 00:43:03</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Atendimentos Por Dia</h3>
                                <a href="javascript:void(0);">Ver Relatórios</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">820</span>
                                    <span>Atendimentos</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 12.5%
                                    </span>
                                    <span class="text-muted">Desde o ultimo mês</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="visitors-chart" height="200"></canvas>
                            </div>

                            <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                    <i class="fas fa-square text-primary"></i> Este Mês
                                </span>

                                <span>
                                    <i class="fas fa-square text-gray"></i> Mês Passado
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
        </div>
    </section>
    <!-- Main content -->
@endsection
@endpermission