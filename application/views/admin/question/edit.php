<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pertanyaan - SOULSENSE</title>
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css'); ?>">
</head>
<body>
    <div class="container mt-4">
        <h1>Edit Pertanyaan untuk Metode: <?= $method->name; ?></h1>
        <form action="<?= base_url('question/update/' . $question->id); ?>" method="POST">
            <div class="form-group">
                <label for="question">Pertanyaan</label>
                <textarea name="question" class="form-control" rows="4" required><?= $question->question; ?></textarea>
            </div>
            <div class="form-group">
                <label for="score">Skor</label>
                <input type="number" name="score" class="form-control" value="<?= $question->score; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('question/index/' . $method->id); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
