<?php
require_once 'Model.php';
require_once 'Buku.php';

class Buku extends Model {
    public function getAllBuku() {
        return $this->getAll("buku");
    }

    public function deleteBuku($id) {
        return $this->delete("buku", "id_buku = $id");
    }
}

$buku = new Buku();
$dataBuku = $buku->getAllBuku();
?>

<link rel="stylesheet" href="style.css">

</table>
</div>

<?php
if (isset($_GET['delete'])) {
    $buku->deleteBuku($_GET['delete']);
    header("Location: Buku.php");
}
?>