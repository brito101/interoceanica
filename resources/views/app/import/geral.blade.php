@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', '- Importações')

@section('content')

    @php
    $heads = ['Consignee', 'Ref Consignee', 'Shipper', 'Porto Origem', 'Cód Porto Destino', 'Porto Destino', 'Local de Recepção', 'Destino Final', 'nº M B/L', 'Navio', 'Viagem', 'Armador', 'Terminal', 'nº do House BL', 'House BL', 'Tipo Carga (LCL, FCL, ....)', 'nº da Cotação', 'Saída Real do Navio', 'Liberação da Carga'];

    $headsUs = ['Consignee', 'Consignee Ref', 'Shipper', 'Port Origin', 'Destination Port Code', 'Destination Port', 'Reception venue', 'Final Destination', 'M B/L no.', 'Ship', 'Trip', 'Shipowner', 'Terminal', 'House BL no.', 'House BL', 'Load Type (LCL, FCL, ....)', 'Quotation no.', 'Actual Ship Departure', 'Cargo Release'];

    $list = [];
    $listUs = [];

    foreach ($impo as $e) {
        $list[] = [$e->Im_CneeNome, $e->Im_CneeRef, $e->Im_ShipperNome, $e->Im_OrigemNome, $e->Im_DestinoNome, $e->Im_PlaceNome, $e->Im_FinalCod, $e->Im_FinalNome, $e->Im_NrMBL, $e->Im_Navio, $e->Im_Viagem, $e->Im_Armador, $e->Im_Terminal, $e->Im_NrHBL, $e->Im_DataHBL, $e->Im_TipoCarga, $e->Im_CotacaoNr, $e->Im_SaidaReal, $e->Im_DtLibera];

        $listUs[] = [$e->Im_CneeNome, $e->Im_CneeRef, $e->Im_ShipperNome, $e->Im_OrigemNome, $e->Im_DestinoNome, $e->Im_PlaceNome, $e->Im_FinalCod, $e->Im_FinalNome, $e->Im_NrMBL, $e->Im_Navio, $e->Im_Viagem, $e->Im_Armador, $e->Im_Terminal, $e->Im_NrHBL, $e->getDataHBL(), $e->Im_TipoCarga, $e->Im_CotacaoNr, $e->getSaidaReal(), $e->getDtLibera()];
    }

    $config = [
        'data' => $list,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];

    $configUs = [
        'data' => $listUs,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
    ];
    @endphp

    <div class="pt-br">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-level-down-alt"></i> Importações</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.import') }}">Importações</a></li>
                            <li class="breadcrumb-item active">Geral</li>
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
                        <h1><i class="fas fa-level-down-alt"></i> Imports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.import') }}">Imports</a></li>
                            <li class="breadcrumb-item active">Geral</li>
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
