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
                                    <span class="info-box-text pt-br">Exportações</span>
                                    <span class="info-box-text en-us">Exports</span>
                                    <span class="info-box-number">{{ $expo }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i
                                        class="fas fa-level-down-alt"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text pt-br">Importações</span>
                                    <span class="info-box-text en-us">Imports</span>
                                    <span class="info-box-number">{{ $impo }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i
                                        class="fas fa-plane-arrival"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">House</span>
                                    <span class="info-box-number">{{ $rasthouse }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1"><i
                                        class="fas fa-plane-departure"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text pt-br">Escala</span>
                                    <span class="info-box-text en-us">Scale</span>
                                    <span class="info-box-number">{{ $rastescala }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('img/logo.png') }}">
                        </div>
                        <div class="card-body p-md-5 pt-br">
                            Desde 2002, a Interoceanica oferece soluções completas em logística integrada e agenciamento de
                            cargas, proporcionando alta performance em suas operações nos mais diversos segmentos. Somos uma
                            companhia orgulhosamente brasileira, reconhecida internacionalmente pela qualidade de nossos
                            serviços na indústria de cargas especiais e logística com resultados comprovados pelo mercado.
                            Excelência, criatividade e inovação, aliados a mais de 20 anos de mercado.
                        </div>
                        <div class="card-body p-md-5 en-us">
                            Since 2002, Interoceanica has been offering complete solutions in integrated logistics and
                            freight forwarding.
                            Loads, providing high performance in its operations in the most diverse segments. We are one
                            proudly Brazilian company, internationally recognized for the quality of our
                            services in the special cargo and logistics industry with market-proven results.
                            Excellence, creativity and innovation, combined with more than 20 years in the market.
                        </div>

                    </div>
                </div>
            </div>
    </section>
@endsection
