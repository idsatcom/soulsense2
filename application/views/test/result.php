<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Tes - <?= $method->name; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css'); ?>">
</head>
<body>
    <div class="container mt-4">
        <h1>Hasil Tes: <?= $method->name; ?></h1>
        <p>Total Skor: <?= $result->total_score; ?></p>
        <h3>Kategori: <?= isset($category->label) ? $category->label : 'Tidak Diketahui'; ?></h3>
        <p><?= isset($category->suggestion) ? $category->suggestion : 'Tidak ada saran untuk kategori ini.'; ?></p>
        <a href="<?= base_url(); ?>" class="btn btn-primary">Kembali ke Beranda</a>
    </div>
</body>
</html>
