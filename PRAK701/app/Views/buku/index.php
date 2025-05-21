<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Buku</title>
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

    .bg-library {
        background-color: #5e412f !important;
        color: white !important;
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

    .card,
    .table {
        background-color: rgba(235, 187, 133, 0.95);
        border: 1px solid #bfa77a;
    }

    h2 {
        color: rgb(255, 255, 255);
    }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Daftar Buku</h2>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>

        <a href="/buku/create" class="btn btn-library mb-3">+ Tambah Buku</a>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover m-0">
                    <thead class="bg-library">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($buku as $i => $row): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= $row['judul'] ?></td>
                            <td><?= $row['penulis'] ?></td>
                            <td><?= $row['penerbit'] ?></td>
                            <td><?= $row['tahun_terbit'] ?></td>
                            <td>
                                <a href="/buku/edit/<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="/buku/delete/<?= $row['id'] ?>" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php if (empty($buku)): ?>
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data buku.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>