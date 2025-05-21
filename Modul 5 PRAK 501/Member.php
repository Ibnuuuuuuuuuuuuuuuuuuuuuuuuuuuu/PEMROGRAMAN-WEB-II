<?php
require_once 'Model.php';
require_once 'Member.php';

class Member extends Model {
    public function getAllMember() {
        return $this->getAll("member");
    }

    public function deleteMember($id) {
        return $this->delete("member", "id_member = $id");
    }
}

$member = new Member();
$dataMember = $member->getAllMember();
?>

<link rel="stylesheet" href="style.css">

</table>
</div>

<?php
if (isset($_GET['delete'])) {
    $member->deleteMember($_GET['delete']);
    header("Location: Member.php");
}
?>