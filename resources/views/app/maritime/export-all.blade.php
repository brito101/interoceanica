@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', '- Modal Marítimo: Exportações')

@section('content')

    @php
    $heads = ['nº Reserva', 'nº H B/L', 'Referência', 'Shipper (B/L)', 'Consignee (B/L)', 'Origem da Reserva', 'Destino da Reserva', 'Via da Reserva', 'Local de Recepção', 'Destino Final', 'Tipo de Carga (LCL ou FCL ou BB)', 'Booking', 'Entrega da Carga', 'Entrega de Documentos', 'Navio', 'nº Viagem', 'Tempo de Trânsito', 'ETA', 'ETD', 'Saída Navio', 'Chegada no Destino', 'nº dos Containers'];

    $headsUs = ['Reservation no.', 'H B/L no.', 'Reference', 'Shipper (B/L)', 'Consignee (B/L)', 'Booking Origin', 'Reservation Destination', 'Reservation route', 'Reception Venue', 'Final Destination', 'Load Type (LCL or FCL or BB)', 'Booking', 'Cargo Delivery', 'Documents Delivery', 'Ship', 'Travel no.', 'Traffic Time', 'ETA', 'ETD', 'Departure Ship', 'Arrival at Destination', 'Containers no.'];

    $list = [];
    $listUs = [];

    foreach ($expo as $e) {
        $list[] = [$e->Ex_ReservaNr, $e->Ex_BLNr, $e->Ex_RefCliente, $e->Ex_Shipper, $e->Ex_Consignee, $e->Ex_Origem, $e->Ex_Destino, $e->Ex_Via, $e->Ex_Receipt, $e->Ex_FinalDest, $e->Ex_TipoCarga, $e->Ex_DtReserva, $e->Ex_EntregaCarga, $e->Ex_EntregaDoc, $e->Ex_Navio, $e->Ex_Viagem, $e->Ex_TransitTime, $e->Ex_ETA, $e->Ex_ETD, $e->Ex_SaidaNavio, $e->Ex_DtChegDestino, $e->Ex_Container];

        $listUs[] = [$e->Ex_ReservaNr, $e->Ex_BLNr, $e->Ex_RefCliente, $e->Ex_Shipper, $e->Ex_Consignee, $e->Ex_Origem, $e->Ex_Destino, $e->Ex_Via, $e->Ex_Receipt, $e->Ex_FinalDest, $e->Ex_TipoCarga, $e->getDtReservaUs(), $e->getEntregaCargaUs(), $e->getEntregaDocUs(), $e->Ex_Navio, $e->Ex_Viagem, $e->Ex_TransitTime, $e->getETAUs(), $e->getETDUs(), $e->getSaidaNavio(), $e->getDtChegDestino(), $e->Ex_Container];
    }

    $config = [
        'data' => $list,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];

    $configUs = [
        'data' => $listUs,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
    ];
    @endphp

    <div class="pt-br">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><img src="{{ asset('img/ship.png') }}" alt="" title="" class="mr-2"> Exportações</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.maritime') }}">Modal Marítimo</a></li>
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
                        <h1><img src="{{ asset('img/ship.png') }}" alt="" title="" class="mr-2"> Exports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.maritime') }}">Maritime Mode</a></li>
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
