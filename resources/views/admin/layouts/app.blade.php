<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service-Management :: Administrative Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('./assets/admin-assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('./assets/admin-assets/css/adminlte.min.css') }}">

    <!-- <link rel="stylesheet" href="{{ asset('admin-assets/plugins/dropzone/min/dropzone.min.css') }}"> -->
    <!-- Summernote -->
    <link rel="stylesheet" href="{{ asset('./assets/admin-assets/plugins/summernote/summernote.min.css') }}">

    <link rel="stylesheet" href="{{ asset('./assets/admin-assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('./assets/admin-assets/css/datetimepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('./assets/admin-assets/css/custom.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <!-- Toggle button -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>

                <!-- Home link -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link home-link">
                        <img src="{{ asset('./assets/admin-assets/img/home.ico') }}" alt="Home Icon"
                            style="width: 20px; height: 20px; vertical-align: middle;">
                        <strong style="font-weight: bolder ;">Home</strong>
                    </a>
                </li>
            </ul>

            <!-- Breadcrumb placeholder (Optional, uncomment if needed) -->
            <!--
    <div class="navbar-nav pl-2">
        <ol class="breadcrumb p-0 m-0 bg-white">
            <li class="breadcrumb-item"><a href="products.html">Products</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
    -->
           
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Fullscreen button -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <!-- <i class="fas fa-expand-arrows-alt"></i> -->
                        <image src="https://ssl.gstatic.com/gb/images/bar/al-icon.png" alt="" height="24" width="24"></image>
                    </a>
                </li>


                <!-- User dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                        <img src="{{ asset('./assets/admin-assets/img/avatar5.png') }}" class="img-circle elevation-2" width="40"
                            height="40" alt="User Avatar">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                        <div class="text-center">
                            <h4 class="h4 mb-0"><strong>{{ Auth::guard('admin')->user()->name }}</strong></h4>
                            <hr>
                            <div class="mb-3">{{ Auth::guard('admin')->user()->email }}</div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <!-- Optional Settings Link -->
                        <!--
                <div class="text-center">
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-user-cog mr-2"></i> Settings
                    </a>
                </div>
                -->
                        <div class="dropdown-divider"></div>
                        <!-- Change Password -->
                        <div class="text-center">
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-lock mr-2"></i> Change Password
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <!-- Logout -->
                        <div class="text-center">
                            <a href="{{ route('admin.logout') }}" class="dropdown-item text-danger">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('admin.layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">

            <strong style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif: bold ;">Copyright
                &copy; 2024-2025 Online Shop All rights reserved.
        </footer>

    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('./assets/admin-assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('./assets/admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('./assets/admin-assets/js/adminlte.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('./assets/admin-assets/plugins/summernote/summernote.min.js') }}"></script>

    <script src="{{ asset('./assets/admin-assets/plugins/select2/js/select2.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('./assets/admin-assets/js/demo.js') }}"></script>

    <script src="{{ asset('./assets/admin-assets/js/datetimepicker.js') }}"></script>

    <script src="{{ asset('./assets/admin-assets/plugins/dropzone/min/dropzone.min.js') }}"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>   -->
    <script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {
            $(".summernote").summernote({
                height: 250,  // Corrected from semicolon to comma
            });
        });
    </script>
    @yield('customJs')
</body>

</html>