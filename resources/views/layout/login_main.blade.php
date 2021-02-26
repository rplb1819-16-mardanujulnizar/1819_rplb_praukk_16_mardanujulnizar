<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/img/logo_telma.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor_login/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts_login/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts_login/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor_login/animate/animate.css">
    <!--=========================================assets/======================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor_login/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor_login/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css_login/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css_login/main.css">
    <!--===============================================================================================-->

    <style>
        .footer {
            background-color: black;
        }

        .p {
            text-align: center;
            color: white;
            font-family: Arial;
            font-size: 20px;
        }
    </style>

</head>

<body>
    <!-- ini adalah isi konten login -->
    @yield('container')



    <div id="page-wrapper">

        <div id="page-inner">
            <!-- isi konten -->
            @yield('container')

            <footer class="footer">
                <p class="p">All Rights Reserved. © 2021 BY TELMA APPS </p>
            </footer>

        </div>
        <!-- /. PAGE INNER  -->
    </div>

    <!--===============================================================================================-->
    <script src="assets/vendor_login/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor_login/bootstrap/js/popper.js"></script>
    <script src="assets/vendor_login/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor_login/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/js_login/main.js"></script>


</body>

</html>