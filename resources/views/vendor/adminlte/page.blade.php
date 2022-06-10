@extends('adminlte::master')

@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())

@section('body_data', $layoutHelper->makeBodyData())

@section('body')
    <div class="wrapper">

        {{-- Top Navbar --}}
        @if ($layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.navbar.navbar-layout-topnav')
        @else
            @include('adminlte::partials.navbar.navbar')
        @endif

        {{-- Left Main Sidebar --}}
        @if (!$layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.sidebar.left-sidebar')
        @endif

        {{-- Content Wrapper --}}
        @empty($iFrameEnabled)
            @include('adminlte::partials.cwrapper.cwrapper-default')
        @else
            @include('adminlte::partials.cwrapper.cwrapper-iframe')
        @endempty

        {{-- Footer --}}
        @hasSection('footer')
            @include('adminlte::partials.footer.footer')
        @endif

        {{-- Right Control Sidebar --}}
        @if (config('adminlte.right_sidebar'))
            @include('adminlte::partials.sidebar.right-sidebar')
        @endif

    </div>
    <footer class="main-footer fixed-bottom">
        <strong>Copyright © 2022-{{ date('Y') }} <a href="https://www.rodrigobrito.dev.br" target="_blank"
                rel="noreferrer" title="Rodrigo Brito Desenvolvedor Web">rodrigobrito.dev.br</a>.</strong>
        <span class="pt-br">Todos os direitos Reservados</span><span class="en-us">All rights
            reserved</span>.
        <div class="float-right d-none d-sm-inline-block">
            <b class="pt-br">Versão</b><b class="en-us">Version</b> 2.0.0
        </div>
    </footer>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop

@section('custom_js')
    <script>
        const flagBr = $('*[data-flag="br"]');
        const flagUs = $('*[data-flag="us"]');
        const menuBr = $('*[data-menu="br"]');
        const menuUs = $('*[data-menu="us"]');
        const itensBr = $('.pt-br');
        const itensUs = $('.en-us');

        itensBr.hide();
        menuBr.hide();

        let language = localStorage.getItem('interoceanica-language');

        if (language == 'pt-br') {
            itensUs.hide();
            itensBr.show();
            menuUs.hide();
            menuBr.show();
        }

        if (language == 'en-us') {
            itensUs.show();
            itensBr.hide();
            menuUs.show();
            menuBr.hide();
        }

        if (flagBr && flagUs) {
            $(flagBr).addClass('d-flex justify-content-between align-items-center')
                .append('<img src="{{ asset('img/brazil.png') }}" height="20" class="ml-2"/>')
                .on('click', (e) => {
                    e.preventDefault();
                    localStorage.setItem('interoceanica-language', 'pt-br');
                    $(flagUs).removeClass('active');
                    $(flagBr).addClass('active');
                    itensUs.hide();
                    itensBr.show();
                    menuUs.hide();
                    menuBr.show();
                });

            $(flagUs).addClass('d-flex justify-content-between align-items-center')
                .append('<img src="{{ asset('img/united-states.png') }}" height="20" class="ml-2"/>')
                .on('click', (e) => {
                    e.preventDefault();
                    localStorage.setItem('interoceanica-language', 'en-us');
                    $(flagBr).removeClass('active');
                    $(flagUs).addClass('active');
                    itensUs.show();
                    itensBr.hide();
                    menuUs.show();
                    menuBr.hide();
                });
        }
    </script>
@endsection
