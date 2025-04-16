<?php
$errorNama = $errorNim = $errorJenisKelamin = "";
$nama = $nim = $jeniskelamin = "";

if (isset($_POST["submit"])) {
    if (empty($_POST["nama"])) {
        $errorNama = "nama tidak boleh kosong";
    } else {
        $nama = $_POST["nama"];
    }

    if (empty($_POST["nim"])) {
        $errorNim = "nim tidak boleh kosong";
    } else {
        $nim = $_POST["nim"];
    }

    if (empty($_POST["jeniskelamin"])) {
        $errorJenisKelamin = "jenis kelamin tidak boleh kosong";
    } else {
        $jeniskelamin = $_POST["jeniskelamin"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Nama:
        <input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
        <span class="error">* <?php echo $errorNama; ?></span>
        <br>
        Nim:
        <input type="text" name="nim" value="<?php echo htmlspecialchars($nim); ?>">
        <span class="error">* <?php echo $errorNim; ?></span>
        <br>
        Jenis Kelamin : <span class="error">* <?php echo $errorJenisKelamin; ?></span>
        <br>
        <input type="radio" name="jeniskelamin" value="Laki-laki"
            <?php if (isset($jeniskelamin) && $jeniskelamin == "Laki-laki") echo "checked"; ?>> Laki-laki<br>
        <input type="radio" name="jeniskelamin" value="Perempuan"
            <?php if (isset($jeniskelamin) && $jeniskelamin == "Perempuan") echo "checked"; ?>> Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

<?php
if (!empty($nama) && !empty($nim) && !empty($jeniskelamin)) {
    echo "$nama <br>";
    echo "$nim <br>";
    echo "$jeniskelamin <br>";
}
?>

</html>