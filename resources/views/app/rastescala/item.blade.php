@extends('adminlte::page')

@section('title', '- Item de House')

@section('content')

    <div class="pt-br">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-fw fa-plane-departure"></i> Escala</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.rastEscala') }}">Escala</a></li>
                            <li class="breadcrumb-item active">Item de Escala</li>
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

                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="name">Aeroporto</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Aeroporto }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-6 form-group px-0 pl-md-2">
                                        <label for="name">Voo</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Flight }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="name">Data</label>
                                        <input type="text" class="form-control" name="name" value="{{ $item->Re_Data }}"
                                            disabled>
                                    </div>

                                    <div class="col-12 col-md-6 form-group px-0 pl-md-2">
                                        <label for="name">Hora</label>
                                        <input type="text" class="form-control" name="name" value="{{ $item->Re_Hora }}"
                                            disabled>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="{{ route('app.rastEscala') }}" class="btn btn-primary">Retornar para Escala</a>
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
                        <h1><i class="fas fa-fw fa-plane-departure"></i> Scale</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.rastEscala') }}">Scale</a></li>
                            <li class="breadcrumb-item active">Scale Item</li>
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

                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="name">Airport</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Aeroporto }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-6 form-group px-0 pl-md-2">
                                        <label for="name">Flight</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Flight }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="name">Date</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->getDate() }}" disabled>
                                    </div>

                                    <div class="col-12 col-md-6 form-group px-0 pl-md-2">
                                        <label for="name">Hour</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->Re_Hora }}" disabled>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="{{ route('app.rastEscala') }}" class="btn btn-primary">Return to Scale</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
