<?php 
  include_once 'atas.php';
?>
<form 
method="POST" action="form_belanja.php"
class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Belanja Online</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="customer">Nama Customer</label>  
  <div class="col-md-4">
  <input id="customer" name="customer" type="text" placeholder="Nama Customer" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="produk">Pilih Produk</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="produk-0">
      <input type="radio" name="produk" id="produk-0" value="TV" checked="checked">
      TV
    </label> 
    <label class="radio-inline" for="produk-1">
      <input type="radio" name="produk" id="produk-1" value="Kulkas">
      Kulkas
    </label> 
    <label class="radio-inline" for="produk-2">
      <input type="radio" name="produk" id="produk-2" value="Mesin Cuci">
      Mesin Cuci
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jumlah">Jumlah</label>  
  <div class="col-md-4">
  <input id="jumlah" name="jumlah" type="text" placeholder="Jumlah Beli" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="proses"></label>
  <div class="col-md-4">
    <input type="submit" 
	       value="Kirim"button id="proses" name="proses" class="btn btn-primary">
  </div>
</div>

</fieldset>
</form>
<?php 
  include_once 'bawah.php';
?>