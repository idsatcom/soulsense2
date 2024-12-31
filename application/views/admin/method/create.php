<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Metode - SOULSENSE</title>
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css'); ?>">
</head>
<body>
    <div class="container mt-4">
        <h1>Tambah Metode Tes</h1>
        <form action="<?= base_url('method/store'); ?>" method="POST">
            <div class="form-group">
                <label for="name">Nama Metode</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('method'); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
