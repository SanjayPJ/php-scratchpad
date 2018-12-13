<?php

	//for loop
	for($i = 0; $i < 10; $i++){
		echo "$i\n";
	}
	//while loop
	while($i != 0){
		echo "$i\n";
		$i--;
	}
	//do while loop
	do{
		echo "$i\n";
		$i++;
	}while($i < 10);
	//for each loop
	$people = array('sanjay', 'amritha');
	foreach($people as $person){
		echo "$person\n";
	}
	$people = array('sanjay' => 'sanjaypjayan2000@gmail.com', 'amritha' => 'amritha@gmail.com');
	foreach ($people as $person => $email) {
		echo "name: $person \t email: $email\n";
	}
?>