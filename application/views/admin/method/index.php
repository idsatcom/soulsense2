<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Metode</title>
    <!-- Include CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <?= $this->include('admin/navbar'); ?>
    <!-- Sidebar -->
    <?= $this->include('admin/sidebar'); ?>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">Metode</h1>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Metode</h3>
                        <a href="<?= base_url('admin/method/add'); ?>" class="btn btn-primary float-right">
                            <i class="fas fa-plus"></i> Tambah Metode
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Metode</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop data metode -->
                                <?php foreach ($method as $key => $method): ?>
                                <tr>
                                    <td><?= $key + 1; ?></td>
                                    <td><?= $method['name']; ?></td>
                                    <td><?= $method['description']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/method/edit/' . $method['id']); ?>" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="<?= base_url('admin/method/delete/' . $method['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?');">
                                            <i class="fas fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="main-footer">
        <strong>© 2024 FIKES - Universitas Muhammadiyah Jember.</strong> All rights reserved.
    </footer>
</div>

<!-- Include JS -->
<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
</body>
</html>
