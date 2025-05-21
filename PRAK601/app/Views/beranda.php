<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #b3e5fc;
        font-family: 'Courier New', Courier, monospace;
        color: #212121;
    }

    .navbar {
        background-color: #212121;
    }

    .navbar-brand,
    .nav-link {
        color: #b3e5fc !important;
        font-weight: bold;
    }

    .card {
        border: 2px solid #212121;
        background-color: #ffffff;
        box-shadow: 5px 5px 0px #212121;
    }

    .btn-vintage {
        background-color: #212121;
        color: #b3e5fc;
        border: 2px solid #212121;
        font-weight: bold;
    }

    .btn-vintage:hover {
        background-color: #b3e5fc;
        color: #212121;
    }

    .logo-img {
        height: 40px;
        margin-right: 10px;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg px-3">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center">
                <img src="<?= base_url('images/ulm.jpg') ?>" alt="ULM" class="logo-img"
                    title="Universitas Lambung Mangkurat">
                <img src="<?= base_url('images/hmti.png') ?>" alt="HMTI" class="logo-img" title="Himpunan Mahasiswa TI">
            </div>

            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="fw-bold">Willkommen</h1>
            <p>Halo Salam Kenal semuanya, selamat datang di website profil </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <p><strong>Nama:</strong> <?= $nama ?></p>
                    <p><strong>NIM:</strong> <?= $nim ?></p>
                    <a href="/profil" class="btn btn-vintage mt-3">Lihat Profil Lengkap</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>