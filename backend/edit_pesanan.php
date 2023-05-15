<?php 
require_once '../database/dbkoneksi.php';
?>
<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM pesanan WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>
            
<form method="POST" action="proses_pesanan.php">
<div class="form-group row">
    <label for="nama_pelanggan" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="nama_pelanggan" value="<?= $row['nama_pelanggan']?>" name="nama_pelanggan" type="text" class="form-control">
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
        <input id="alamat_pelanggan" value="<?= $row['alamat_pelanggan']?>" name="alamat_pelanggan" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="motor_id" class="col-4 col-form-label">Motor Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="motor_id" value="<?= $row['motor_id']?>" name="motor_id" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="quantity" class="col-4 col-form-label">Quantity</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="quantity" value="<?= $row['quantity']?>" name="quantity"  type="text" class="form-control">
      </div>
    </div>
  </div>
 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Update"/>
      <input type="hidden" name="idedit" value="<?=$_idedit;?>">
    </div>
  </div>
</form>
