<?php
require_once 'Model.php';
require_once 'Peminjaman.php';


$peminjaman = new Peminjaman();
$member = new Member();
$buku = new Buku();

$id = $_GET['id'] ?? null;
$data = $id ? $peminjaman->getById("peminjaman", "id_peminjaman = $id") : null;

$allMember = $member->getAllMember();
$allBuku = $buku->getAllBuku();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'id_member' => $_POST['id_member'],
        'id_buku' => $_POST['id_buku'],
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali']
    ];

    if ($id) {
        $peminjaman->update("peminjaman", $data, "id_peminjaman = $id");
    } else {
        $peminjaman->insert("peminjaman", $data);
    }
    header("Location: Peminjaman.php");
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h3>Form Peminjaman</h3>
    <form method="POST">
        <label for="id_member">Nama Member:</label>
        <select name="id_member" required>
            <option value="">-- Pilih Member --</option>
            <?php while ($m = $allMember->fetch_assoc()) : ?>
            <option value="<?= $m['id_member'] ?>"
                <?= ($data['id_member'] ?? '') == $m['id_member'] ? 'selected' : '' ?>>
                <?= $m['nama_member'] ?>
            </option>
            <?php endwhile; ?>
        </select><br><br>

        <label for="id_buku">Judul Buku:</label>
        <select name="id_buku" required>
            <option value="">-- Pilih Buku --</option>
            <?php while ($b = $allBuku->fetch_assoc()) : ?>
            <option value="<?= $b['id_buku'] ?>" <?= ($data['id_buku'] ?? '') == $b['id_buku'] ? 'selected' : '' ?>>
                <?= $b['judul_buku'] ?>
            </option>
            <?php endwhile; ?>
        </select><br><br>

        <label for="tgl_pinjam">Tanggal Pinjam:</label>
        <input type="date" name="tgl_pinjam" value="<?= $data['tgl_pinjam'] ?? '' ?>"><br><br>

        <label for="tgl_kembali">Tanggal Kembali:</label>
        <input type="date" name="tgl_kembali" value="<?= $data['tgl_kembali'] ?? '' ?>"><br><br>

        <button type="submit" class="btn">Simpan</button>

    </form>

    <div style="flex: 1;">
        <h4>Data Member</h4>
        <ul>
            <?php
                $memberList = $member->getAllMember();
                while ($m = $memberList->fetch_assoc()) {
                    echo "<li>{$m['id_member']} - {$m['nama_member']}</li>";
                }
                ?>
        </ul>

        <h4>Data Buku</h4>
        <ul>
            <?php
                $bukuList = $buku->getAllBuku();
                while ($b = $bukuList->fetch_assoc()) {
                    echo "<li>{$b['id_buku']} - {$b['judul_buku']}</li>";
                }
                ?>
        </ul>
    </div>
</div>
</div>