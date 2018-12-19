<?php
    $people = [
        'Christina Lyons',
        'Guadalupe Tyler',
        'Brooke Collins'
    ];

    //code
    $q = $_REQUEST['q'];
    $suggestions = "";
    if($q != ""){
        $q = strtolower($q);
        foreach($people as $person){
            $person_lower = strtolower($person);
            if(strstr($person_lower, $q)) {
                if($suggestions === ""){
                    $suggestions = $person;
                }else{
                    $suggestions = $suggestions . ", $person";
                }
            }
        }
    }
    echo $suggestions === "" ? "No Suggestions" : $suggestions; 
?>
