<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        background-image: url('/images/background.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        font-family: 'Georgia', serif;
        color: #3e2c1c;
    }

    .btn-library {
        background-color: #8b5e3c;
        color: white;
        border: none;
    }

    .btn-library:hover {
        background-color: #734c2c;
        color: white;
    }

    .card {
        background-color: rgba(255, 248, 240, 0.95);
        border: 1px solid #bfa77a;
    }

    h4 {
        color: #5e412f;
    }
    </style>
</head>

<body>
    <div class="container py-5" style="max-width: 700px;">
        <div class="card shadow-sm p-4">
            <h4 class="mb-4">Tambah Buku</h4>

            <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <?php endif; ?>

            <form action="/buku/store" method="post">
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" value="<?= old('judul') ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control" value="<?= old('penulis') ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="<?= old('penerbit') ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" class="form-control" value="<?= old('tahun_terbit') ?>"
                        required>
                </div>
                <button type="submit" class="btn btn-library">Simpan</button>
                <a href="/buku" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</body>

</html>