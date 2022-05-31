@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', '- Importações')

@section('content')

    @php
    $heads = ['Registro', 'Consignee', 'Shipper', 'Cliente', 'Visualizar'];

    $list = [];

    foreach ($impo as $e) {
        $list[] = [$e->Im_TipoReg, $e->Im_CneeNome, $e->Im_ShipperNome, $e->Im_ClienteNome, '<nobr>' . '<a class="btn btn-xs btn-default text-primary mx-1 shadow" title="Visualizar" href="import/' . $e->Im_MasterCod . '"><i class="fa fa-lg fa-fw fa-eye"></i></a>'];
    }

    $config = [
        'data' => $list,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, ['orderable' => false]],
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
                                <a href="{{ route('app.import.geral') }}" class="btn btn-info">Planilha Geral</a>
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
