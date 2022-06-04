@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', '- House')

@section('content')

    @php
    $heads = ['Ref Master', 'Ref House', 'Visualizar'];
    $headsUs = ['Ref Master', 'Ref House', 'View'];

    $list = [];
    $listUs = [];

    foreach ($rasthouse as $e) {
        $list[] = [$e->Ra_RefMaster, $e->Ra_RefHouse, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="Visualizar" href="house/' . $e->Ra_CodHouse . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
        $listUs[] = [$e->Ra_RefMaster, $e->Ra_RefHouse, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="View" href="house/' . $e->Ra_CodHouse . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
    }

    $config = [
        'data' => $list,
        'order' => [[0, 'asc']],
        'columns' => [null, null, ['orderable' => false]],
        'language' => ['url' => asset('vendor/datatables/js/pt-BR.json')],
    ];

    $configUs = [
        'data' => $listUs,
        'order' => [[0, 'asc']],
        'columns' => [null, null, ['orderable' => false]],
    ];
    @endphp

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-plane-arrival"></i> House</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">House</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content pt-br">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @include('components.alert')
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex flex-wrap justify-content-between col-12 align-content-center">
                                <h3 class="card-title align-self-center">Dados Cadastrados</h3>
                                <a href="{{ route('app.rastHouse.geral') }}" class="btn btn-info">Planilha Geral</a>
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

    <section class="content en-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @include('components.alert')
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex flex-wrap justify-content-between col-12 align-content-center">
                                <h3 class="card-title align-self-center">Registered Data</h3>
                                <a href="{{ route('app.rastHouse.geral') }}" class="btn btn-info">General Worksheet</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <x-adminlte-datatable id="table2" :heads="$headsUs" :heads="$headsUs" :config="$configUs" striped
                                hoverable beautify with-buttons compressed />
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
