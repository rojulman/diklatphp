<?php 
  include_once 'atas.php';
  require_once 'libfungsi.php';
?>
<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];


$ar_nilai = [$ns1, $ns2 , $ns3, $ns4 ];

if(!empty($_GET['proses'])) {
  $proses = $_GET['proses'];
  $nama_siswa = $_GET['nama'];
  $mata_kuliah = $_GET['matkul'];
  $nilai_uts = $_GET['nilai_uts'];
  $nilai_uas = $_GET['nilai_uas'];
  $nilai_tugas = $_GET['nilai_tugas'];

 $ns5 = ['id'=>5,'nim'=>$nama_siswa,
            'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];
 $ar_nilai[] = $ns5; 
}
?>
<h2>Daftar Nilai Siswa</h2>
<table border="1" width="100%">
  <thead>
	<tr bgcolor="yellow">
		<th>NO</th>
		<th>NIM</th>
		<th>UTS</th>
		<th>UAS</th>
		<th>Tugas</th>
		<th>Nilai Akhir</th>
		<th>Kelulusan</th>
		<th>Grade</th>
  </thead>
  <tbody>
	<?php 
	   $nomor = 1;
	   foreach($ar_nilai as $ns){
		
		$warna = ($nomor%2==0) ? "beige":"cyan";
		
		echo '<tr bgcolor="'.$warna.'"><td>'.$nomor.'</td>';
	    echo '<td>'.$ns['nim'].'</td>';
		echo '<td>'.$ns['uts'].'</td>';
		echo '<td>'.$ns['uas'].'</td>';
		echo '<td>'.$ns['tugas'].'</td>';
		$nilai_akhir = ($ns['uts']+$ns['uas']+$ns['tugas'])/3;
		echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
		echo '<td>'.kelulusan($nilai_akhir).'</td>';
		echo '<td>'.grade($nilai_akhir).'</td>';
		echo '</tr>';
		$nomor++;
	   }
	?>
  </tbody>
</table>
<?php 
  include_once 'bawah.php';
?>