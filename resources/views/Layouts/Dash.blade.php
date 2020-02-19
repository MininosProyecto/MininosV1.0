@include('Layouts.header')



    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>@yield('Cabecera')</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                @yield('Listar')
            </div>
        </div>
    </div>

<div>
    @yield('Contenido')
</div>

@include('Layouts.footer')
