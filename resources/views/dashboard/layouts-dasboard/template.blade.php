<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('dashboard-admin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard-admin') }}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    @include('dashboard.layouts-dasboard.navbar')
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @yield('content')


    {{-- footer --}}
    @include('dashboard.layouts-dasboard.footer')



    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dashboard-admin') }} /vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('dashboard-admin') }} /vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dashboard-admin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dashboard-admin') }}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('dashboard-admin') }}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('dashboard-admin') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('dashboard-admin') }}/js/demo/chart-pie-demo.js"></script>

</body>

</html>
