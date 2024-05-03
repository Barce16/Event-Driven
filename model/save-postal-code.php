<?php



$registration = array(
    'postal_regCode' => "'" . $_POST['inp_region'] . "'",
    'postal_provCode' => "'" . $_POST['inp_province'] . "'",
    'postal_citymunCode' => "'" . $_POST['inp_citymun'] . "'",
    'postal_code' => "'" . $_POST['inp_postalcode'] . "'",
   
   

);
save($registration);
function save($data)
{

    include('../config/database.php');

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));
    $query = "INSERT INTO ph_postalcode ($attributes) VALUES ($values)";


     if ($conn->query($query) === TRUE) {
        header("location: /Event-Driven/postalcode.php?success");
    } else {
        header("location: /Event-Driven/postalcode.php?invalid");
     }

    $conn->close(); 

}
