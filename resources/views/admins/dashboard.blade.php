<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light navbar-white">
        <div class="container">
            <a href="{{route('admins.dashboard',[$admin->admin_id])}}" class="navbar-brand">
                <img src="/images-admin/college.jpg" height="50px" width="50px" alt="Admin-Image"
                     class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">West Side</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Help
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                        <a class="dropdown-item" href="#">FAQ</a>
                        <a class="dropdown-item" href="#">Support</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Contact</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <img src="/images-admin/{{$admin->picture}}" alt="Admin-Image" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">West Side</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/images-admin/{{$admin->picture}}" height="50px" width="50px" class="img-circle elevation-2" alt="Admin Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ $admin->admin_name }}</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="{{route('student.index')}}" class="nav-link" id="load-students">
                            <i class="far nav-icon"></i>
                            <p>Students</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('student.index')}}" class="nav-link" id="load-teachers">
                            <i class="far nav-icon"></i>
                            <p>Teachers</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Main content -->
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid" id="content-area">
                <!-- Dynamic content will be loaded here -->
            </div>
        </div>
    </div>

    <script>
        // AJAX to load Students content
        $('#load-students').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                url: '{{route('student.index')}}',
                method: 'GET',
                success: function (data) {
                    $('#content-area').html(data);
                },
                error: function () {
                    alert('Failed to load Students content.');
                }
            });
        });

        // AJAX to load Teachers content
        $('#load-teachers').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                url: '{{route('teacher.index')}}',
                method: 'GET',
                success: function (data) {
                    $('#content-area').html(data);
                },
                error: function () {
                    alert('Failed to load Teachers content.');
                }
            });
        });
    </script>
</body>
</html>
