@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', '- Modal Aéreo')

@section('content')

    @php
    $headsExport = ['Ref Master', 'Ref House', 'Aeroporto', 'Voo', 'Data', 'Hora', 'Visualizar'];
    $headsImport = ['Ref Master', 'Ref House', 'Aeroporto', 'Voo', 'Data', 'Hora', 'Visualizar'];
    $headsExportUs = ['Ref Master', 'Ref House', 'Airport', 'Flight', 'Date', 'Hour', 'View'];
    $headsImportUs = ['Ref Master', 'Ref House', 'Airport', 'Flight', 'Date', 'Hour', 'View'];

    $listExport = [];
    $listImport = [];
    $listExportUs = [];
    $listImportUs = [];

    foreach ($expo as $e) {
        $listExport[] = [$e->Ra_RefMaster, $e->Ra_RefHouse, $e->Re_Aeroporto, $e->Re_Flight, $e->Re_Data, $e->Re_Hora, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="Visualizar" href="air-export/' . $e->Ra_CodHouse . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
        $listExportUs[] = [$e->Ra_RefMaster, $e->Ra_RefHouse, $e->Re_Aeroporto, $e->Re_Flight, $e->getDateUs(), $e->Re_Hora, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="View" href="air-export/' . $e->Ra_CodHouse . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
    }

    foreach ($impo as $e) {
        $listImport[] = [$e->Ra_RefMaster, $e->Ra_RefHouse, $e->Re_Aeroporto, $e->Re_Flight, $e->Re_Data, $e->Re_Hora, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="Visualizar" href="air-import/' . $e->Ra_CodHouse . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
        $listImportUs[] = [$e->Ra_RefMaster, $e->Ra_RefHouse, $e->Re_Aeroporto, $e->Re_Flight, $e->getDateUs(), $e->Re_Hora, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="View" href="air-import/' . $e->Ra_CodHouse . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
    }

    $configExport = [
        'data' => $listExport,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, ['orderable' => false]],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];

    $configImport = [
        'data' => $listImport,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, ['orderable' => false]],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];

    $configExportUs = [
        'data' => $listExportUs,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, ['orderable' => false]],
    ];

    $configImportUs = [
        'data' => $listImportUs,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, ['orderable' => false]],
    ];
    @endphp

    <div class="pt-br">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-plane"></i> Modal Aéreo</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Modal Aéreo</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content pt-br">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('components.alert')
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between col-12 align-content-center">
                                    <h3 class="card-title align-self-center">Exportações</h3>
                                    <a href="{{ route('app.air.export.all') }}" class="btn btn-info">Planilha Geral</a>
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

        <section class="content pt-br">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('components.alert')
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between col-12 align-content-center">
                                    <h3 class="card-title align-self-center">Importações</h3>
                                    <a href="{{ route('app.air.import.all') }}" class="btn btn-info">Planilha Geral</a>
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
                        <h1><i class="fas fa-plane"></i> Air Mode</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Air Mode</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content en-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('components.alert')
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between col-12 align-content-center">
                                    <h3 class="card-title align-self-center">Exports</h3>
                                    <a href="{{ route('app.air.export.all') }}" class="btn btn-info">General
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

        <section class="content en-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('components.alert')
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between col-12 align-content-center">
                                    <h3 class="card-title align-self-center">Imports</h3>
                                    <a href="{{ route('app.air.import.all') }}" class="btn btn-info">General
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
