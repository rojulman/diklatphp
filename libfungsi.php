<?php 

function kelulusan($_nilai){
	return ($_nilai > 55) ? "LULUS" : "TIDAK LULUS";
}

function grade($_nilai){
	if($_nilai <= 35 ) return 'E';
	elseif($_nilai <=55) return 'D';
	elseif($_nilai <=69) return 'C';
	elseif($_nilai <=84) return 'B';
	elseif($_nilai <=100) return 'A';
	else return 'I';
}


?>