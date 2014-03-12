<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <title>Ala-Laravel</title>

        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <link href="assets/css/sb-admin.css" rel="stylesheet" />
        <link href="assets/css/chosen.css" rel="stylesheet" />
        <link href="assets/css/prism.css" rel="stylesheet" />
        <link href="assets/css/datepicker3.css" rel="stylesheet" />
        <link href="assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
        <script src="assets/js/plugins/morris/morris.js"></script>
        <script src="assets/js/sb-admin.js"></script>
        <script src="assets/js/chosen.jquery.js"></script>
        <script src="assets/js/prism.js"></script>
        <script src="assets/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/datepicker-locales/bootstrap-datepicker.pt-BR.js"></script>
        <script src="assets/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
        <script src="assets/js/plugins/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/plugins/dataTables/bootstrap-dataTables-paging.js"></script>

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