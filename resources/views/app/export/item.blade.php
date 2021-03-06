@extends('adminlte::page')

@section('title', '- Item de Exportação')

@section('content')

    <div class="pt-br">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-fw fa-level-up-alt"></i> Item de Exportação</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.export') }}">Exportações</a></li>
                            <li class="breadcrumb-item active">Item de Exportação</li>
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
                                        <label for="name">Número da Reserva</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_ReservaNr }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Número do H B/L</label>
                                        <input type="text" class="form-control" name="name" value="{{ $expo->Ex_BLNr }}"
                                            disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Razão Social do Cliente</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_ClienteRazao }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Referência do Cliente</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_RefCliente }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Nome do Shipper no B/L</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Shipper }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Nome do Consignee no B/L</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Consignee }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Origem da Reserva</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Origem }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Destino da Reserva</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Destino }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Via da Reserva</label>
                                        <input type="text" class="form-control" name="name" value="{{ $expo->Ex_Via }}"
                                            disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Local de Recepção</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Receipt }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Destino Final</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_FinalDest }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">LCL ou FCL ou BB...</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_TipoCarga }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Data do Booking</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_DtReserva }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Data da Entrega da Carga</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_EntregaCarga }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Data da Entrega dos Documentos</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_EntregaDoc }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Nome do Navio</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Navio }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Número da Viagem</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Viagem }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Tempo de Trânsito</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_TransitTime }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">ETA</label>
                                        <input type="text" class="form-control" name="name" value="{{ $expo->Ex_ETA }}"
                                            disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">ETD</label>
                                        <input type="text" class="form-control" name="name" value="{{ $expo->Ex_ETD }}"
                                            disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Saída Navio</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_SaidaNavio }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Data Chegada no Destino</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_DtChegDestino }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Número dos Containers</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Container }}" disabled>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="{{ route('app.export') }}" class="btn btn-primary">Retornar para Exportações</a>
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
                        <h1><i class="fas fa-fw fa-level-up-alt"></i> Export Item</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.export') }}">Exports</a></li>
                            <li class="breadcrumb-item active">Export Item</li>
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
                                        <label for="name">Reservation Number</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_ReservaNr }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">H B/L Number</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_BLNr }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Client's Corporate Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_ClienteRazao }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Customer Reference</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_RefCliente }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Shipper name on B/L</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Shipper }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Consignee name on B/L</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Consignee }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Booking Origin</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Origem }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Reservation Destination</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Destino }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Reservation Route</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Via }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Reception Venue</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Receipt }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Final Destination</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_FinalDest }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">LCL or FCL or BB...</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_TipoCarga }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Booking Date</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->getDtReservaUs() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Cargo Delivery Date</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->getEntregaCargaUs() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Document Delivery Date</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->getEntregaDocUs() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Vessel's Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Navio }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Trip Number</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Viagem }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Traffic Time</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_TransitTime }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">ETA</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->getETAUs() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">ETD</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->getETDUs() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Departure Ship</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->getSaidaNavio() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Arrival Date at Destination</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->getDtChegDestino() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Number of Containers</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $expo->Ex_Container }}" disabled>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="{{ route('app.export') }}" class="btn btn-primary">Return to Exports</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
