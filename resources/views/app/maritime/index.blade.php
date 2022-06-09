@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', '- Modal Marítimo')

@section('content')

    @php
    $headsExport = ['Código', 'nº Reserva', 'nº H B/L', 'Visualizar'];
    $headsExportUs = ['Code', 'Reservation no.', 'H B/L no.', 'View'];
    $headsImport = ['Consignee', 'Shipper', 'Visualizar'];
    $headsImportUs = ['Consignee', 'Shipper', 'View'];

    $listExport = [];
    $listExportUs = [];
    $listImport = [];
    $listImportUs = [];

    foreach ($expo as $e) {
        $listExport[] = [$e->Ex_ReservaCod, $e->Ex_ReservaNr, $e->Ex_BLNr, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="Visualizar" href="maritime-export/' . $e->Ex_ReservaCod . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
        $listExportUs[] = [$e->Ex_ReservaCod, $e->Ex_ReservaNr, $e->Ex_BLNr, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="View" href="maritime-export/' . $e->Ex_ReservaCod . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
    }

    foreach ($impo as $e) {
        $listImport[] = [$e->Im_CneeNome, $e->Im_ShipperNome, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="Visualizar" href="maritime-import/' . $e->Im_MasterCod . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
        $listImportUs[] = [$e->Im_CneeNome, $e->Im_ShipperNome, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="View" href="maritime-import/' . $e->Im_MasterCod . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
    }

    $configExport = [
        'data' => $listExport,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, ['orderable' => false]],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];

    $configExportUs = [
        'data' => $listExportUs,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, ['orderable' => false]],
    ];

    $configImport = [
        'data' => $listImport,
        'order' => [[0, 'asc']],
        'columns' => [null, null, ['orderable' => false]],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];

    $configImportUs = [
        'data' => $listImportUs,
        'order' => [[0, 'asc']],
        'columns' => [null, null, ['orderable' => false]],
    ];

    @endphp

    <div class="pt-br">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-anchor"></i> Modal Marítimo</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Modal Marítimo</li>
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
                                    <h3 class="card-title align-self-center">Exportações</h3>
                                    <a href="{{ route('app.maritime.export.all') }}" class="btn btn-info">Planilha
                                        Geral</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <x-adminlte-datatable id="table1" :heads="$headsExport" :heads="$headsExport" :config="$configExport"
                                    striped hoverable beautify with-buttons compressed />
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('components.alert')
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between col-12 align-content-center">
                                    <h3 class="card-title align-self-center">Importações</h3>
                                    <a href="{{ route('app.maritime.import.all') }}" class="btn btn-info">Planilha
                                        Geral</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <x-adminlte-datatable id="table2" :heads="$headsImport" :heads="$headsImport" :config="$configImport"
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
                        <h1><i class="fas fa-anchor"></i> Maritime Mode</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Maritime Mode</li>
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
                                    <h3 class="card-title align-self-center">Exports</h3>
                                    <a href="{{ route('app.maritime.export.all') }}" class="btn btn-info">General
                                        Worksheet</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <x-adminlte-datatable id="table3" :heads="$headsExportUs" :heads="$headsExportUs" :config="$configExportUs"
                                    striped hoverable beautify with-buttons compressed />
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('components.alert')
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between col-12 align-content-center">
                                    <h3 class="card-title align-self-center">Imports</h3>
                                    <a href="{{ route('app.maritime.import.all') }}" class="btn btn-info">General
                                        Worksheet</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <x-adminlte-datatable id="table4" :heads="$headsImportUs" :heads="$headsImportUs" :config="$configImportUs"
                                    striped hoverable beautify with-buttons compressed />
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
