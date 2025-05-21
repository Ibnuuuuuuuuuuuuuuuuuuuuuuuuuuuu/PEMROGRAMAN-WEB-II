<?php
require_once 'Model.php';
require_once 'Peminjaman.php';
require_once 'Member.php';
require_once 'Buku.php';
include 'navbar.php';

class Peminjaman extends Model {
    public function getAllPeminjaman() {
        return $this->getAll("peminjaman");
    }

    public function deletePeminjaman($id) {
        return $this->delete("peminjaman", "id_peminjaman = $id");
    }
}

$peminjaman = new Peminjaman();
$member = new Member();
$buku = new Buku();
$dataPeminjaman = $peminjaman->getAllPeminjaman();
$allMember = $member->getAllMember();
$allBuku = $buku->getAllBuku();

echo "<h3>Data Peminjaman</h3>";
echo "<a href='FormPeminjaman.php'>Tambah Peminjaman</a>";
echo "<table border='1' class='table'>";
echo "<tr><th>ID</th><th>ID Member</th><th>ID Buku</th><th>Tgl Pinjam</th><th>Tgl Kembali</th><th>Aksi</th></tr>";
while ($row = $dataPeminjaman->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id_peminjaman']}</td>
        <td>{$row['id_member']}</td>
        <td>{$row['id_buku']}</td>
        <td>{$row['tgl_pinjam']}</td>
        <td>{$row['tgl_kembali']}</td>
        <td>
            <a href='FormPeminjaman.php?id={$row['id_peminjaman']}'>Edit</a> |
            <a href='Peminjaman.php?delete={$row['id_peminjaman']}'>Hapus</a>
        </td>
    </tr>";
}
echo "</table>";

// Hapus peminjaman
if (isset($_GET['delete'])) {
    $peminjaman->deletePeminjaman($_GET['delete']);
    header("Location: Peminjaman.php");
}
?>