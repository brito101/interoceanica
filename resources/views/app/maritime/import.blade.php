@extends('adminlte::page')

@section('title', '- Modal Marítimo: Importação')

@section('content')

    <div class="pt-br">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><img src="{{ asset('img/ship.png') }}" alt="" title=""
                                style="-webkit-transform: scaleX(-1); transform: scaleX(-1);" class="mr-2">Item de
                            Importação</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.maritime') }}">Modal Marítimo</a></li>
                            <li class="breadcrumb-item active">Item de Importação</li>
                        </ol>
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
                                <h3 class="card-title">Dados Cadastrais do Item</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-12 d-flex flex-wrap justify-content-center">

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Nome do Consignee</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_CneeNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Referência do Consignee</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_CneeRef }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Nome do Shipper</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_ShipperNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Nome do Porto de Origem</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_OrigemNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Nome do Porto de Destino</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_DestinoNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Nome do Place Receipt</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_PlaceNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Nome do Final Destination</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_FinalNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Número M B/L</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_NrMBL }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Nome do Navio</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_Navio }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Viagem</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_Viagem }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Nome do Armador</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_Armador }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Nome do Terminal</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_Terminal }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Número do House BL</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_NrHBL }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Data do House BL</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_DataHBL }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Tipo da Carga (LCL, FCL, ....)</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_TipoCarga }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Número da Cotação</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_CotacaoNr }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Data da Saída Real do Navio</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_SaidaReal }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Data da Liberação da Carga</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_DtLibera }}" disabled>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="{{ route('app.maritime') }}" class="btn btn-primary">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="en-us">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><img src="{{ asset('img/ship.png') }}" alt="" title=""
                                style="-webkit-transform: scaleX(-1); transform: scaleX(-1);" class="mr-2"> Import
                            Item</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.maritime') }}">Maritime Mode</a></li>
                            <li class="breadcrumb-item active">Import Item</li>
                        </ol>
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
                                <h3 class="card-title">Item Registration Data</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-12 d-flex flex-wrap justify-content-center">

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Consignee Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_CneeNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Consignee Reference</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_CneeRef }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Shipper Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_ShipperNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Name of Port of Origin</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_OrigemNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Destination Port Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_DestinoNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Name of Place Receipt</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_PlaceNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Final Destination Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_FinalNome }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">M B/L Number</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_NrMBL }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Vessel's Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_Navio }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Trip</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_Viagem }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Shipowner's Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_Armador }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Terminal Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_Terminal }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">House BL Number</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_NrHBL }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Date of House BL</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->getDataHBL() }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Load Type (LCL, FCL, ....)</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_TipoCarga }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Quotation Number</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->Im_CotacaoNr }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Date of Actual Ship Departure</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->getSaidaReal() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Cargo Release Date</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $impo->getDtLibera() }}" disabled>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="{{ route('app.maritime') }}" class="btn btn-primary">Return</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
