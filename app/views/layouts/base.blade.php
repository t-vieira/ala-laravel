<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <title>Ala-Laravel</title>

        {{HTML::style('/assets/css/bootstrap.css') }}
        {{HTML::style('/assets/font-awesome/css/font-awesome.min.css') }}
        {{HTML::style('/assets/css/plugins/morris/morris-0.4.3.min.css') }}
        {{HTML::style('/assets/css/sb-admin.css') }}
        {{HTML::style('/assets/css/chosen.css') }}
        {{HTML::style('/assets/css/prism.css') }}
        {{HTML::style('/assets/css/datepicker3.css') }}
        {{HTML::style('/assets/css/plugins/dataTables/dataTables.bootstrap.css') }}

        {{HTML::script('/assets/js/jquery-1.10.2.js') }}
        {{HTML::script('/assets/js/bootstrap.min.js') }}
        {{HTML::script('/assets/js/plugins/metisMenu/jquery.metisMenu.js') }}
        {{HTML::script('/assets/js/plugins/morris/raphael-2.1.0.min.js') }}
        {{HTML::script('/assets/js/plugins/morris/morris.js') }}
        {{HTML::script('/assets/js/sb-admin.js') }}
        {{HTML::script('/assets/js/chosen.jquery.js') }}
        {{HTML::script('/assets/js/prism.js') }}
        {{HTML::script('/assets/js/bootstrap-datepicker.js') }}
        {{HTML::script('/assets/js/datepicker-locales/bootstrap-datepicker.pt-BR.js') }}
        {{HTML::script('/assets/js/bootstrap-datepicker.js') }}
        {{HTML::script('assets/js/plugins/dataTables/dataTables.bootstrap.js') }}
        {{HTML::script('/assets/js/plugins/dataTables/jquery.dataTables.js') }}
        {{HTML::script('/assets/js/plugins/dataTables/bootstrap-dataTables-paging.js') }}

    </head>

    <body>

        <div id="wrapper">
            @include('elements.header')

            @include('elements.menu')

            <div id="page-wrapper">
                <div class="row">
                    @yield('conteudo')
                </div>
            </div>

        </div>

    </body>

</html>