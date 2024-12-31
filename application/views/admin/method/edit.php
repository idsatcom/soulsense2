<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Metode - SOULSENSE</title>
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css'); ?>">
</head>
<body>
    <div class="container mt-4">
        <h1>Edit Metode Tes</h1>
        <form action="<?= base_url('method/update/'.$method->id); ?>" method="POST">
            <div class="form-group">
                <label for="name">Nama Metode</label>
                <input type="text" name="name" class="form-control" value="<?= $method->name; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" class="form-control" rows="4" required><?= $method->description; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('method'); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
