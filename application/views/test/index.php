<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pengujian - <?= $method->name; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css'); ?>">
</head>
<body>
    <div class="container mt-4">
        <h1>Pengujian: <?= $method->name; ?></h1>
        <form action="<?= base_url('test/submit/' . $method->id); ?>" method="POST">
            <?php foreach ($questions as $index => $question): ?>
                <div class="form-group">
                    <label><?= $index + 1; ?>. <?= $question->question; ?></label>
                    <input type="number" name="question_<?= $question->id; ?>" class="form-control" min="0" max="10" required>
                </div>
            <?php endforeach; ?>
            <div class="form-group">
                <label for="email">Email (opsional untuk menyimpan hasil tes):</label>
                <input type="email" name="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Selesai</button>
        </form>
        <a href="<?= base_url(); ?>" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
