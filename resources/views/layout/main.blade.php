<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- icon website -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo_telma.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/materialize.min.css') }}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />

    <!-- bootstrap detail -->
    <link href="{{ asset('assets/css/bootstrap-detail.css') }}" rel="stylesheet" />

    <!-- FontAwesome Styles-->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />

    <!-- Morris Chart Styles-->
    <link href="{{ asset('assets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('assets/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('assets/js/Lightweight-Chart/cssCharts.css') }}">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand waves-effect waves-dark" href="/">
                    <strong class="font-family-arial" style="margin: auto;">TELMA APPS</strong>
                </a>

                <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw" style="color: white;"></i> <b style="color: white;">Halo, Admin</b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <!-- <li><a href=""><i class="fa fa-user fa-fw"></i> My Profile</a>
            </li>
            <li><a href="/"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li> -->
            <li><a href="/"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="/homepage_admin" class="waves-effect waves-dark"><i class="fa fa-dashboard"></i>
                            Dashboard</a>
                    </li>
                    <li>
                        <a href="/kelola_paket_laundry" class="menu waves-effect waves-dark"><i class="fa fa-table"></i>Kelola Paket Laundry</a>
                    </li>
                    <li>
                        <a href="/kelola_user" class="menu waves-effect waves-dark"><i class="fa fa-table"></i>Kelola User</a>
                    </li>
                    <li>
                        <a href="/dashboard/outlet" class="menu waves-effect waves-dark"><i class="fa fa-table"></i>Kelola Outlet</a>
                    </li>
                    <li>
                        <a href="/kelola_pelanggan" class="menu waves-effect waves-dark"><i class="fa fa-table"></i>Kelola Pelanggan</a>
                    </li>
                    <li>
                        <a href="/kelola_transaksi" class="menu waves-effect waves-dark"><i class="fa fa-money"></i>Transaksi Pembayaran</a>
                    </li>
                    <li>
                        <a href="/laporan_transaksi" class="menu waves-effect waves-dark"><i class="fa fa-table"></i>Laporan Transaksi</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">

            <div id="page-inner">
                <!-- isi konten -->
                
                @yield('container')

                <footer>
                    <p>All Rights Reserved. © 2021 BY TELMA APPS </p>
                </footer>

                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>

    <!-- Bootstrap Js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/materialize/js/materialize.min.js') }}"></script>

    <!-- Metis Menu Js -->
    <script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
    <!-- Morris Chart Js -->
    <script src="{{ asset('assets/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/morris/morris.js') }}"></script>


    <script src="{{ asset('assets/js/easypiechart.js') }}"></script>
    <script src="{{ asset('assets/js/easypiechart-data.js') }}"></script>

    <script src="{{ asset('assets/js/Lightweight-Chart/jquery.chart.js') }}"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="{{ asset('assets/js/dataTables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/dataTables.bootstrap.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/custom-scripts.js') }}"></script>

    <!-- script untuk menampilkan dan menyembunyikan isi password -->
    <script>
        function change() {
            var x = document.getElementById('pass').type;

            if (x == 'password') {
                document.getElementById('pass').type = 'text';
                document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
            } else {
                document.getElementById('pass').type = 'password';
                document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
            }
        }
    </script>



</body>

</html>