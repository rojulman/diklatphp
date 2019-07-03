<form>
Tanggal : 
<select name="tg">
    <option value="">Pilih Tanggal</option>
	<?php 
	   $bln = date('m');//ambil bulan server
	   for($x = 1 ; $x <= 31 ; $x++){
		   //lanjutkan loop abaikan baris dibawahnya
		   if($x==8 || $x==23) continue; 
		   echo '<option value="'.$x.'">'.$x.'</option>';
		   if($bln == 4 || $bln == 6 || $bln == 9 || $bln==11){
		     if($x == 30) break;//keluar dari loop
		   }			   
	   }
	?>
</select>
</form>