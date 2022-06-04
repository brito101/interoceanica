@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', '- House')

@section('content')

    @php
    $heads = ['nº Ref Master', 'nº Ref House', 'Cia Aérea', 'Cidade Origem', 'Aeroporto Origem', 'Cidade Destino', 'Aeroporto Destino', 'Destino Final', 'Prev Saída', 'Saída', 'Chegada', 'Prev Chegada', 'Entrega no Destino', 'Shipper', 'Cnee', 'Ref Cliente', 'Incoterm', 'Volume', 'Peso Bruto', 'Peso Cubado', 'Peso Taxável'];

    $headsUs = ['Master Ref no.', 'House Ref no.', 'Airline', 'City Origin', 'Airport Origin', 'Destination City', 'Destination Airport', 'Final Destination', 'Departure Forecast', 'Departure', 'Arrival', 'Arrival Forecast', 'Delivery Destination', 'Shipper', 'Cnee', 'Cliente Ref', 'Incoterm', 'Volume', 'Gross Weight', 'Cube Weight', 'Taxable Weight'];

    $list = [];

    foreach ($house as $e) {
        $list[] = [$e->Ra_RefMaster, $e->Ra_RefHouse, $e->Ra_CiaAerea, $e->Ra_OriCid, $e->Ra_OriAero, $e->Ra_DesCid, $e->Ra_DesAero, $e->Ra_FinalDest, $e->getPrevSaida(), $e->getSaida(), $e->getChegada(), $e->getPrevEntreDest(), $e->getEntregaDest(), $e->Ra_Shipper, $e->Ra_Cnee, $e->Ra_ClienteRef, $e->Ra_Incoterm, $e->Ra_Volume, $e->Ra_PesoBruto, $e->Ra_Cubado, $e->Ra_Taxavel];
    }

    $config = [
        'data' => $list,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];

    $configUs = [
        'data' => $list,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
    ];
    @endphp

    <div class="pt-br">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-plane-arrival"></i> House</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.rastHouse') }}">House</a></li>
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
                        <h1><i class="fas fa-plane-arrival"></i> House</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.rastHouse') }}">House</a></li>
                            <li class="breadcrumb-item active">General</li>
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
