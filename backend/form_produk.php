<?php
require_once '../database/dbkoneksi.php';
?>

<form method="POST" action="proses_produk.php">
    <div class="form-group row">
        <label for="nama_motor" class="col-4 col-form-label">Nama Motor</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nama_motor" name="nama_motor" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="cc" class="col-4 col-form-label">cc</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="cc" name="cc" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tipe_motor_id" class="col-4 col-form-label">Tipe Motor</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div>
                <?php 
                $sqltipe= "SELECT * FROM tipe_motor";
                $rstipe = $dbh->query($sqltipe);
                ?>
                <select id="tipe_motor_id" name="tipe_motor_id" class="form-select">
                <?php 
                    foreach($rstipe as $rowtipe){
                ?>
                    <option value="<?=$rowtipe['id']?>"><?=$rowtipe['tipe_motor']?></option>
                <?php
                    }
                ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="harga" class="col-4 col-form-label">Harga</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="harga" name="harga" value="" type="teks" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="merk_id" class="col-4 col-form-label">Merk</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <?php
                $sqljenis = "SELECT * FROM merk";
                $rsjenis = $dbh->query($sqljenis);
                ?>
                <select id="merk_id" name="merk_id" class="custom-select">
                <?php 
                if (isset($_GET["idedit"])) {
                $id_jenis = $row["merk_id"];
                $query2 = "SELECT * FROM merk WHERE id = '$id_jenis'";
                $sql2 = $dbh->query($query2);
                $row2 = $sql2->fetch();
                echo '<option value="'.$row2['id'].'">'.$row2['nama_merk'].'</option>';
                }
                    foreach($rsjenis as $rowjenis){
                ?>
                    <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama_merk']?></option>
                <?php
                    }
                ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Stok</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="stok" name="stok" value="" type="number" class="form-control">
            </div>
        </div>
    </div>
    
  
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
</form>