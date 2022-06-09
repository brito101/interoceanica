@extends('adminlte::page')

@section('title', '- Modal Aéreo: Importação')

@section('content')

    <div class="pt-br">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-fw fa-plane-arrival"></i> Importação</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.air') }}">Modal Aéreo</a></li>
                            <li class="breadcrumb-item active">Importação</li>
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
                                        <label for="name">Número de Referência do Master</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_RefMaster }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Número de Referência do House</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_RefHouse }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Nome da Cia Aérea</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_CiaAerea }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Cidade de Origem</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_OriCid }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Aeroporto de Origem</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_OriAero }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Cidade de Destino</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_DesCid }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Aeroporto de Destino</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_DesAero }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Final Destination</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_FinalDest }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Previsão de Saída</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_PrevSaida }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Data de Saída</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Saida }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Data de Chegada</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Chegada }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Previsão de Chegada</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_PrevEntreDest }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Data de Entrega no Destino</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_EntregaDest }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Nome do Shipper</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Shipper }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Nome do Cnee</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Cnee }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Referência do Cliente</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_ClienteRef }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Incoterm</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Incoterm }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Volume</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Volume }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Peso Bruto</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_PesoBruto }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Peso Cubado</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Cubado }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Peso Taxável</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Taxavel }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Aeroporto</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Aeroporto }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Voo</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Flight }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Data</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Data }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Hora</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Hora }}" disabled>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="{{ route('app.air') }}" class="btn btn-primary">Voltar</a>
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
                        <h1><i class="fas fa-fw fa-plane-arrival"></i> Import</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.air') }}">Air</a></li>
                            <li class="breadcrumb-item active">Import</li>
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
                                        <label for="name">Master Reference Number</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_RefMaster }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">House Reference Number</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_RefHouse }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Airline Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_CiaAerea }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">City of Origin</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_OriCid }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Aeroporto de Origem</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_OriAero }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Cidade de Destino</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_DesCid }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Destination Airport</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_DesAero }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Final Destination</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_FinalDest }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Output Forecast</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->getPrevSaida() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Departure Date</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->getSaida() }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Arrival Date</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->getChegada() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Arrival Forecast</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->getPrevEntreDest() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Delivery Date at Destination</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->getEntregaDest() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Shipper Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Shipper }}" disabled>
                                    </div>
                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Cnee Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Cnee }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Customer Reference</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_ClienteRef }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Incoterm</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Incoterm }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Volume</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Volume }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Gross Weight</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_PesoBruto }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Cube Weight</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Cubado }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Taxable Weight</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Ra_Taxavel }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pr-md-2">
                                        <label for="name">Airport</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Aeroporto }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Flight</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Flight }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 pl-md-2">
                                        <label for="name">Date</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->getDateUs() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-4 form-group px-0 px-md-2">
                                        <label for="name">Hour</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Hora }}" disabled>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="{{ route('app.air') }}" class="btn btn-primary">Return</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
