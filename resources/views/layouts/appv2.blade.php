<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Research Grant Management')</title>
    
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/admin-lte/dist/css/adminlte.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">RGM System</span>
            </a>
            <div class="sidebar">
                <nav>
                    <ul class="nav nav-pills nav-sidebar flex-column">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('research-grants.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Research Grants</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('milestones.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-tasks"></i>
                                <p>Milestones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('academicians.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Academicians</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <h1 class="m-0">@yield('header', 'Dashboard')</h1>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        <footer class="main-footer text-center">
            <strong>Copyright &copy; {{ date('Y') }} RGM System.</strong> All rights reserved.
        </footer>
    </div>

    <!-- AdminLTE JS -->
    <script src="{{ asset('vendor/admin-lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
