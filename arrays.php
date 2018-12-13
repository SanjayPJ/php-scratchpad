<?php 
	$people = array('sanjay', 'amritha');
	$ids = array(12, 45, 78);
	echo $people[1];
	echo $ids[2];
	echo count($people);
	print_r($people);
	var_dump($people);
	//associative array
	$people = array('sanjay' => 18, 'amritha' => 18);
	$people = array(1 => 'sanjay', 2 => 'amritha');
	print_r($people);
	//multi-dimentional array
	$matrix = array(
		array(12, 34, 45),
		array(34, 56 , 78),
	);
	var_dump($matrix);
	echo $matrix[1][2];
?>