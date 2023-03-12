<?php
function dataNilai($uts, $uas, $tugas){
	$total = $uts + $uas + $tugas;
	$dn = $total/3;

	return $dn;
}

	function kelulusan($dn){
		if ($dn >= 55) {
			return 'Lulus' ;
		}else {
			return 'Tidak Lulus';
		}
	}

	
	function grade($dt) {
		if ($dn <= 100) {
			return 'A' ;
		}elseif ($dn <= 84) {
			return 'B';
		}elseif ($dn <= 69) {
			return 'C' ;
		}elseif ($dn <= 55) {
			return 'D';
		}elseif ($dn <= 35) {
			return 'E' ;
		}else {
			return 'I';
		}
	}
	
	function predikat($dn){
		switch (grade($dn)){
			case 'A' ;
				return 'Sangat Memuaskan' ;
				break;
			case 'B' ;
				return 'Memuaskan';
				break;
			case 'C' ;
				return 'Cukup' ;
				break;
			case 'D' ;
				return 'Kurang';
				break;
			case 'E' ;
				return 'Sangat Kurang';
				break;
			default ;
				return 'Tidak Ada' ;
				break;
		}
	}
		
	
?>