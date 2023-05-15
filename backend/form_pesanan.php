<?php
require_once '../database/dbkoneksi.php';
?>

<form method="POST" action="proses_pesanan.php">
    <div class="form-group row">
        <label for="nama_pelanggan" class="col-4 col-form-label">Nama Pelanggan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nama_pelanggan" name="nama_pelanggan" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat_pelanggan" class="col-4 col-form-label">Alamat Pelanggan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="alamat_pelanggan" name="alamat_pelanggan" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_motor" class="col-4 col-form-label">Produk Motor</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div>
                <?php
                $sqljenis = "SELECT * FROM motor";
                $rsjenis = $dbh->query($sqljenis);
                ?>
                <select id="motor_id" name="motor_id" class="col-12">
                <?php
                    if (isset($_GET['idedit'])) {
                    $id_jenis = $row["motor_id"];
                    $query2 = "SELECT * FROM motor WHERE motor_id = $id_jenis";
                    $sql2 = $dbh->query($query2);
                    $row2 = $sql2->fetch();
                    echo "<option value='$row2[motor_id]'>$row2[nama_motor]</option>";
                    }

                    foreach ($rsjenis as $rowjenis) {
                ?>
                    <option value="<?= $rowjenis["id"] ?>"><?php echo $rowjenis["nama_motor"] ?></option>
                <?php } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="quantity" class="col-4 col-form-label">Quantity</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="quantity" name="quantity" value="" type="number" class="form-control">
            </div>
        </div>
    </div>
    
  
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
</form>