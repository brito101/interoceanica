@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', '- Exportações')

@section('content')

    @php
    $heads = ['Código', 'nº Reserva', 'nº H B/L', 'Nome Fantasia', 'Razão Social', 'Referência', 'e-mail', 'Shipper (B/L)', 'Consignee (B/L)', 'Última ALT na Reserva', 'Reserva Cancelada', 'Origem da Reserva', 'Destino da Reserva', 'Via da Reserva', 'Local de Recepção', 'Destino Final', 'Tipo de Carga (LCL ou FCL ou BB)', 'Quantidade de Volumes', 'Peso Total da Carga', 'Cubagem da Carga', 'Booking', 'Entrega da Carga', 'Entrega de Documentos', 'Navio', 'Agente', 'nº Viagem', 'Cód interno da Consolidada', 'nº Consolidada', 'Tempo de Trânsito', 'ETA', 'ETD', 'Saída Navio', 'Transbordo', 'Chegada no Destino', 'nº dos Containers', 'Tipo Transbordo'];

    $list = [];

    foreach ($expo as $e) {
        $list[] = [$e->Ex_ReservaCod, $e->Ex_ReservaNr, $e->Ex_BLNr, $e->Ex_ClienteFanta, $e->Ex_ClienteRazao, $e->Ex_RefCliente, $e->Ex_EmailCliente, $e->Ex_Shipper, $e->Ex_Consignee, $e->Ex_Gravacao, $e->Ex_Cancela, $e->Ex_Origem, $e->Ex_Destino, $e->Ex_Via, $e->Ex_Receipt, $e->Ex_FinalDest, $e->Ex_TipoCarga, $e->Ex_Quantidade, $e->Ex_Peso, $e->Ex_Cubagem, $e->Ex_DtReserva, $e->Ex_EntregaCarga, $e->Ex_EntregaDoc, $e->Ex_Navio, $e->Ex_Agente, $e->Ex_Viagem, $e->Ex_ConsoCodigo, $e->Ex_ConsoNumero, $e->Ex_TransitTime, $e->Ex_ETA, $e->Ex_ETD, $e->Ex_SaidaNavio, $e->Ex_DtTransbo, $e->Ex_DtChegDestino, $e->Ex_Container, $e->Ex_TipoTransbo];
    }

    $config = [
        'data' => $list,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];
    @endphp

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
                            </div>
                        </div>
                        <div class="card-body">
                            <x-adminlte-datatable id="table1" :heads="$heads" :heads="$heads" :config="$config" striped
                                hoverable beautify with-buttons compressed />
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
