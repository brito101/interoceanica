@extends('adminlte::page')

@section('title', '- Dashboard')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                    <div class="d-flex flex-wrap justify-content-center">
                        <div class="col-12 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-primary elevation-1"><i
                                        class="fas fa-level-up-alt"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Exportações</span>
                                    <span class="info-box-number">{{ $expo }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i
                                        class="fas fa-level-down-alt"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Importações</span>
                                    <span class="info-box-number">{{ $impo }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
