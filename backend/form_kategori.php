<?php
require_once '../database/dbkoneksi.php';
?>

<form method="POST" action="proses_kategori.php">
    <div class="form-group row">
        <label for="tipe_motor" class="col-4 col-form-label">Tipe Motor</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="tipe_motor" name="tipe_motor" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
   
    
  
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
</form>