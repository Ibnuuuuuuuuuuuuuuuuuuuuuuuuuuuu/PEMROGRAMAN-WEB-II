<!DOCTYPE html>
<html>

<head>
    <title>Login - Perpustakaan</title>
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

    .card {
        background-color: rgba(255, 248, 240, 0.95);
        border: 1px solid #bfa77a;
        border-radius: 10px;
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

    h4 {
        color: #5e412f;
    }
    </style>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
            <div class="text-center mb-4">
                <h4>Login Perpustakaan</h4>
            </div>
            <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            <form action="/login/auth" method="post">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required placeholder="email@example.com">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required placeholder="********">
                </div>
                <button type="submit" class="btn btn-library w-100">Masuk</button>
            </form>
        </div>
    </div>
</body>

</html>