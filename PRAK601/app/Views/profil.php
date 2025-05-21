<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profil</title>
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
        border: 5px solid #212121;
        background-color: #fff;
        box-shadow: 6px 6px 0px #212121;
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

    img {
        border: 3px solid #212121;
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
            <h1 class="fw-bold">Profil Praktikan</h1>
            <p>Halo Saya Mahasiswa Asal Prodi Teknologi Informasi yang sedang menjalani perkuliahan semester 4
                Saya merupakan angkatan 2023 dan juga Pengurus Himpunan Mahasiswa Teknologi Informasi periode 2025
            </p>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 text-center mb-4">
                <img src="<?= base_url('images/' . $gambar) ?>" class="img-fluid rounded shadow"
                    style="max-width: 450px; border: 4px solid #212121;" alt="Foto Profil">
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Nama:</strong> <?= $nama ?></li>
                        <li class="list-group-item"><strong>NIM:</strong> <?= $nim ?></li>
                        <li class="list-group-item"><strong>Program Studi:</strong> <?= $prodi ?></li>
                        <li class="list-group-item"><strong>Jabatan:</strong> <?= $jabatan ?></li>
                        <li class="list-group-item"><strong>Hobi:</strong> <?= $hobi ?></li>
                        <li class="list-group-item"><strong>Skill:</strong> <?= $skill ?></li>
                    </ul>
                    <a href="/" class="btn btn-vintage mt-3">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>