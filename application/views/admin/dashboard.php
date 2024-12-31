<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/bootstrap.min.css'); ?>">
    <!-- FontAwesome icons -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
   

        body {
            background-color: #f4f6f9;
        }

        .brand-image {
            width: 5%; /* Resize the logo to 20% of its original size */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/logout'); ?>">Logout</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <img src="<?= base_url('assets/adminlte/img/logo_soul.png'); ?>" alt="Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-light">SoulSense</span>
        </a>
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="<?= base_url('admin/dashboard'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/method/index'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>Metode</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/question'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-question"></i>
                            <p>Pertanyaan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/results'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-list"></i>
                            <p>Hasil Tes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/users'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Pengguna</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>
                                <p>Pengguna</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="<?= base_url('admin/users'); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53</h3>
                                <p>Hasil Tes</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <a href="<?= base_url('admin/results'); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- More boxes if needed -->
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong>© 2024 FIKES - Universitas Muhammadiyah Jember.</strong> All rights reserved.
    </footer>
</div>

<!-- JS files -->
<script src="<?= base_url('assets/adminLte/plugins/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>

<!--
<script>
    console.log("jQuery loaded:", typeof jQuery !== "undefined");
    console.log("Bootstrap loaded:", typeof $.fn.modal !== "undefined");
    console.log("AdminLTE loaded:", typeof $.fn.AdminLTE !== "undefined");
</script>
    -->
</body>
</html>
