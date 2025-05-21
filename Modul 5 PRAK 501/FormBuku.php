<?php
require_once 'Model.php';
require_once 'Buku.php' ;
include 'navbar.php';

$buku = new Buku();
$id = $_GET['id'] ?? null;
$data = $id ? $buku->getById("buku", "id_buku = $id") : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'judul_buku' => $_POST['judul_buku'],
        'penulis' => $_POST['penulis']
    ];

    if ($id) {
        $buku->update("buku", $data, "id_buku = $id");
    } else {
        $buku->insert("buku", $data);
    }
    header("Location: Buku.php");
}
?>

<div class="container">
    <h3>Form Buku</h3>
    <form method="POST">
        Judul: <input type="text" name="judul_buku" value="<?= $data['judul_buku'] ?? '' ?>"><br>
        Penulis: <input type="text" name="penulis" value="<?= $data['penulis'] ?? '' ?>"><br>
        <button type="submit">Simpan</button>
    </form>
</div>


<div class="container">
    <h3>Data Buku</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row = $dataBuku->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id_buku']}</td>
                <td>{$row['judul_buku']}</td>
                <td>{$row['penulis']}</td>
                <td>
                    <a href='FormBuku.php?id={$row['id_buku']}'> Edit</a> |
                    <a href='Buku.php?delete={$row['id_buku']}'> Hapus</a>
                </td>
            </tr>";
        }