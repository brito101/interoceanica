@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', '- Escala')

@section('content')

    @php
    $heads = ['Aeroporto', 'Voo', 'Data', 'Hora', 'Visualizar'];
    $headsUs = ['Airport', 'Flight', 'Date', 'Hour', 'View'];

    $list = [];
    $listUs = [];

    foreach ($rastescala as $e) {
        $list[] = [$e->Re_Aeroporto, $e->Re_Flight, $e->Re_Data, $e->Re_Hora, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="Visualizar" href="escala/' . $e->Re_Codigo . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
        $listUs[] = [$e->Re_Aeroporto, $e->Re_Flight, $e->Re_Data, $e->Re_Hora, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="View" href="escala/' . $e->Re_Codigo . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
    }

    $config = [
        'data' => $list,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, ['orderable' => false]],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];
    $configUs = [
        'data' => $listUs,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, ['orderable' => false]],
    ];
    @endphp

    <div class="pt-br">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-plane-departure"></i> Escala</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Escala</li>
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
                                    {{-- <a href="{{ route('app.rastEscala.geral') }}" class="btn btn-info">Planilha Geral</a> --}}
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
                        <h1><i class="fas fa-plane-departure"></i> Scale</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Scale</li>
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
                                    {{-- <a href="{{ route('app.rastEscala.geral') }}" class="btn btn-info">Planilha Geral</a> --}}
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
