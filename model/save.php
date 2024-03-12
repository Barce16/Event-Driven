<?php

include('../config/database.php');

$registration = array(
    '$_ID'=> $_POST['inp_ID'],
    '$_FName'=> $_POST['inp_FName'],
    '$_LName'=> $_POST['inp_LName'],
    '$_MName'=> $_POST['inp_MName'],
    '$_Gmail'=> $_POST['inp_Gmail'],
    '$_Address'=> $_POST['inp_Address'],
    '$_Contact_Num'=> $_POST['inp_Contact_Num'],
    '$_Gender'=> $_POST['inp_Gender'],
);
	save($registration);
function save($data){

    $attributes = implode(  ' ',array_keys($data));
    $values = implode(' ',array_values($data)); 

    print_r($attributes);
    print_r($values);
}
