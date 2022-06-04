@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', '- Exportações')

@section('content')

    @php
    $heads = ['Código', 'nº Reserva', 'nº H B/L', 'Visualizar'];
    $headsUs = ['Code', 'Reservation no.', 'H B/L no.', 'View'];

    $list = [];
    $listUs = [];

    foreach ($expo as $e) {
        $list[] = [$e->Ex_ReservaCod, $e->Ex_ReservaNr, $e->Ex_BLNr, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="Visualizar" href="export/' . $e->Ex_ReservaCod . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
        $listUs[] = [$e->Ex_ReservaCod, $e->Ex_ReservaNr, $e->Ex_BLNr, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="View" href="export/' . $e->Ex_ReservaCod . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
    }

    $config = [
        'data' => $list,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, ['orderable' => false]],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];

    $configUs = [
        'data' => $listUs,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, ['orderable' => false]],
    ];

    @endphp

    <div class="pt-br">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-level-up-alt"></i> Exportações</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Exportações</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('components.alert')
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between col-12 align-content-center">
                                    <h3 class="card-title align-self-center">Dados Cadastrados</h3>
                                    <a href="{{ route('app.export.geral') }}" class="btn btn-info">Planilha Geral</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <x-adminlte-datatable id="table1" :heads="$heads" :heads="$heads" :config="$config"
                                    striped hoverable beautify with-buttons compressed />
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <div class="en-us">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-level-up-alt"></i> Exports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Exports</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('components.alert')
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between col-12 align-content-center">
                                    <h3 class="card-title align-self-center">Registered Data</h3>
                                    <a href="{{ route('app.export.geral') }}" class="btn btn-info">General Worksheet</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <x-adminlte-datatable id="table2" :heads="$headsUs" :heads="$headsUs" :config="$configUs"
                                    striped hoverable beautify with-buttons compressed />
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
