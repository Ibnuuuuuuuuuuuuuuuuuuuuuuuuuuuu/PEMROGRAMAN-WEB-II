<?php
require_once 'Model.php';
require_once 'Member.php';
include 'navbar.php';

$member = new Member();
$id = $_GET['id'] ?? null;
$data = $id ? $member->getById("member", "id_member = $id") : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nama_member' => $_POST['nama_member'],
        'nomor_member' => $_POST['nomor_member'],
        'alamat' => $_POST['alamat']
    ];

    if ($id) {
        $member->update("member", $data, "id_member = $id");
    } else {
        $member->insert("member", $data);
    }
    header("Location: Member.php");
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h3>Form Member</h3>
    <form method="POST">
        Nama: <input type="text" name="nama_member" value="<?= $data['nama_member'] ?? '' ?>"><br>
        Nomor: <input type="text" name="nomor_member" value="<?= $data['nomor_member'] ?? '' ?>"><br>
        Alamat: <textarea name="alamat"><?= $data['alamat'] ?? '' ?></textarea><br>
        <button type="submit">Simpan</button>
    </form>
</div>

<div class="container">
    <h3>Data Member</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        
while ($row = $dataMember->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id_member']}</td>
        <td>{$row['nama_member']}</td>
        <td>{$row['nomor_member']}</td>
        <td>{$row['alamat']}</td>
        <td>
            <a href='FormMember.php?id={$row['id_member']}'> Edit</a> |
            <a href='Member.php?delete={$row['id_member']}'> Hapus</a>
        </td>
    </tr>";
}