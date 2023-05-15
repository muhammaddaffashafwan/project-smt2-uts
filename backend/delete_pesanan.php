<?php 
require_once '../database/dbkoneksi.php';
$id=$_GET['iddel'];
$sql="DELETE FROM pesanan WHERE id=?";
$statment = $dbh->prepare($sql);
$statment->execute([$id]);
// redirect page
header('location:pemesanan.php');
?>