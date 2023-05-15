<?php
require_once '../database/dbkoneksi.php';
?>
<?php
    if(isset($_GET['iddel'])){
        $ar_data[]= $_GET['iddel'];
        $sql = "DELETE FROM tipe_motor WHERE id=?";
    } else {
$_tipe_motor = $_POST['tipe_motor'];


$_proses = $_POST['proses'];

// array data
$ar_data[] = $_tipe_motor; // ? 1


if ($_proses == "Simpan") {
    // data baru
    $sql = "INSERT INTO tipe_motor (tipe_motor) VALUES (?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit']; // ? 8
    $sql = "UPDATE tipe_motor SET tipe_motor=? WHERE id=?";
}
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:kategori.php')
?>