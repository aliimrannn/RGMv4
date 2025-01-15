<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'RGM Dashboard')</title>
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Optional: Custom Styling for Sticky Navbar -->
        <style>
            body, html {
                height: 100%;
                margin: 0;
            }

            .navbar {
                position: sticky;
                top: 0;
                z-index: 100;
            }

            .content {
                flex: 1;
                min-height: 100%;
                padding-top: 60px;  /* Adjust if needed to prevent overlap with the sticky navbar */
                padding-bottom: 60px; /* Ensure space for footer */
                overflow-y: auto;
            }

            footer {
                position: relative;
                bottom: 0;
                width: 100%;
                background-color: #333;
                color: white;
                bottom: 0;
            }
        </style>
    </head>
    <body>

    <!-- Navbar (Sticky) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white" href="{{ route('home') }}">RGMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('academicians.index') }}">Academicians</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('research-grants.index') }}">Research Grants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('milestones.index') }}">Milestones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content (Scrollable) -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer (Always at the bottom) 
    <footer class="footer bg-dark text-white text-center py-4">
        <p>&copy; {{ date('Y') }} RGM. All rights reserved.</p>
    </footer>-->

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    </body>
</html>
