<?php
require_once '../database/dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM motor WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<table class="table table-striped">
    <tbody>
        <tr><td>Nama Motor</td><td><?=$row['nama_motor']?></td></tr>
        <tr>  <td>CC</td><td><?=$row['cc']?></td></tr>
        <tr>   <td>Tipe Motor</td><td><?=$row['tipe_motor_id']?></td></tr>
        <tr>   <td>Harga</td><td><?=$row['harga']?></td></tr>
        <tr>   <td>Merk</td><td><?=$row['merk_id']?></td></tr>
        <tr>   <td>Stok</td><td><?=$row['stok']?></td></tr>
    </tbody>
</table>