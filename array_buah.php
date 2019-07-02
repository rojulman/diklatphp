<?php
  $ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];
  
  // cetak buah index ke 2
  echo $ar_buah[2];
  // cetak jumlah buah
  echo 'Jumlah Buah : '. count($ar_buah);
  // cetak seluruh buah
  
  echo '<ol>';
    foreach($ar_buah as $buah){
	   echo '<li>'.$buah.'</li>';
	}
  echo '</ol>';
  
  // tambahkan buah
   $ar_buah[]='Durian';
   
  //hapus buah index ke 1
   unset($ar_buah[1]);  

  // ubah buah index 2 menjadi manggis
   $ar_buah[2]='Manggis';
  
  // cetak seluruh buah dengan indexnya
  echo '<ul>';
  foreach($ar_buah as $k => $v ){
	  echo '<li> buah index - '.$k.' adalah '.$v .'</li>';
	  
  }
  echo '</ul>';
	  
   $bulans = [1=>'Jan','Feb','Mar','Apr','Mei',
                 'Jun','Jul','Agst','Sept','Okt',
				 'Nov','Des'];
?>
<form>
  Bulan : <select name="bln">
  <?php
    foreach($bulans as $k => $v ){
		echo '<option value="'.$k.'">'.$v.'</option>';
	}
  ?>
  </select>
</form>

