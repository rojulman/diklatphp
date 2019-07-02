<form 
  method="GET" action="array_siswa.php" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Nilai Siswa</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Nama Lengkap" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="matkul">Mata Kuliah</label>
  <div class="col-md-4">
    <select id="matkul" name="matkul" class="form-control">
      <option value="DDP">Dasar-dasar Pemrograman</option>
      <option value="BD1">Basis Data I</option>
      <option value="WEB1">Pemrograman Web</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_uts">Nilai UTS</label>  
  <div class="col-md-4">
  <input id="nilai_uts" name="nilai_uts" type="text" placeholder="Nilai UTS" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_uas">Nilai UAS</label>  
  <div class="col-md-4">
  <input id="nilai_uas" name="nilai_uas" type="text" placeholder="Nilai UAS" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_tugas">Nilai Tugas / Praktikum</label>  
  <div class="col-md-4">
  <input id="nilai_tugas" name="nilai_tugas" type="text" placeholder="Nilai Tugas  / Praktikum" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="proses"></label>
  <div class="col-md-4">
    <input type="submit" value="Simpan" 
	       id="proses" name="proses" 
		   class="btn btn-primary">
  </div>
</div>

</fieldset>
</form>

<?php 
  $proses = $_GET['proses'];
  $nama_siswa = $_GET['nama'];
  $mata_kuliah = $_GET['matkul'];
  $nilai_uts = $_GET['nilai_uts'];
  $nilai_uas = $_GET['nilai_uas'];
  $nilai_tugas = $_GET['nilai_tugas'];
  
  echo 'Nama : '. $nama_siswa;
  echo '<br/>Mata Kuliah ' . $mata_kuliah;
  echo '<br/>Nilai UTS : ' . $nilai_uts;
  echo '<br/>Nilai UAS : ' . $nilai_uas;
  echo '<br/>Nilai Tugas / Praktikum : ' . $nilai_tugas;
  
  

?>

