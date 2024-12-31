<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pertanyaan</title>
    <!-- CSS dependencies -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Include Navbar -->
    <?= $this->include('admin/navbar'); ?>
    <!-- Include Sidebar -->
    <?= $this->include('admin/sidebar'); ?>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pertanyaan</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Pertanyaan</h3>
                        <a href="<?= base_url('admin/questions/add'); ?>" class="btn btn-primary float-right">
                            <i class="fas fa-plus"></i> Tambah Pertanyaan
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pertanyaan</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop data pertanyaan -->
                                <?php foreach ($questions as $key => $question): ?>
                                <tr>
                                    <td><?= $key + 1; ?></td>
                                    <td><?= $question['text']; ?></td>
                                    <td><?= $question['category']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/questions/edit/' . $question['id']); ?>" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="<?= base_url('admin/questions/delete/' . $question['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?');">
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
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong>© 2024 FIKES - Universitas Muhammadiyah Jember.</strong> All rights reserved.
    </footer>
</div>

<!-- JS dependencies -->
<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
</body>
</html>
