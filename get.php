<?php
		header("Content-type: application/json");
		$json_array = array (
		'Ime' => 'Nikola',
		'Prezime' => 'Kamcev',
		'Broj indeksa' => '3027',
		'Smer' => 'Informacione tehnologije'
		);
		echo json_encode($json_array);
	
?>