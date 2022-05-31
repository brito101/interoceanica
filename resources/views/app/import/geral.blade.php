@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', '- Importações')

@section('content')

    @php
    $heads = ['Tipo de Registro (Routing ou House)', 'Consignee', 'Ref Consignee', 'Cód Shipper', 'Shipper', 'Notify', 'Despachante', 'Cliente', '“Seu Cliente”', 'Porto Origem', 'Cód Porto Destino', 'Porto Destino', 'Local de Recepção', 'Destino Final', 'nº M B/L', 'Data M B/L', 'Navio', 'Viagem', 'Armador', 'Terminal', 'Atracação', 'Operação do Navio', 'nº do House BL', 'House BL', 'Tipo Carga (LCL, FCL, ....)', 'Cubagem', 'Peso Bruto Carga', 'Mercadoria', 'nº da Cotação', 'Cotação', 'Observação Status', 'Previsão Prontidão', 'Previsão Saída', 'Saída Real do Navio', 'Previsão Chegada', 'Última ALT Registro', 'Hora Última ALT Registro', 'Reserva Cancelada', 'Navio de Transbordo', 'Destino Transbordo', 'Previsão Saida do Transbordo', 'Saída do Transbordo', 'Liberação da Carga', 'Retirada da Carga'];

    $list = [];

    foreach ($impo as $e) {
        $list[] = [$e->Im_TipoReg, $e->Im_CneeNome, $e->Im_CneeRef, $e->Im_ShipperCod, $e->Im_ShipperNome, $e->Im_NotifyNome, $e->Im_DespNome, $e->Im_ClienteNome, $e->Im_SeuCliNome, $e->Im_OrigemNome, $e->Im_DestinoNome, $e->Im_PlaceNome, $e->Im_FinalCod, $e->Im_FinalNome, $e->Im_NrMBL, $e->Im_DataMBL, $e->Im_Navio, $e->Im_Viagem, $e->Im_Armador, $e->Im_Terminal, $e->Im_Atracacao, $e->Im_Operacao, $e->Im_NrHBL, $e->Im_DataHBL, $e->Im_TipoCarga, $e->Im_Cubagem, $e->Im_Peso, $e->Im_DescriMerc, $e->Im_CotacaoNr, $e->Im_DataCota, $e->Im_ObsStatus, $e->Im_PrevPront, $e->Im_PrevSaida, $e->Im_SaidaReal, $e->Im_PrevChega, $e->Im_Gravacao, $e->Im_GravaHora, $e->Im_Cancela, $e->Im_Tra_Navio, $e->Im_Tra_Destino, $e->Im_Tra_PrevSaida, $e->Im_Tra_Saida, $e->Im_DtLibera, $e->Im_DtRetirada];
    }

    $config = [
        'data' => $list,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];
    @endphp

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-level-down-alt"></i> Importações</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Importações</li>
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
