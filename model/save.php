<?php



$registration = array(
    'ID' => "'" . $_POST['inp_ID'] . "'",
    'Fname' => "'" . $_POST['inp_FName'] . "'",
    'Lname' => "'" . $_POST['inp_LName'] . "'",
    'Mname' => "'" . $_POST['inp_MName'] . "'",
    'Gmail' => "'" . $_POST['inp_Gmail'] . "'",
    'Address' => "'" . $_POST['inp_Address'] . "'",
    'Contact' => "'" . $_POST['inp_Contact_Num'] . "'",
    'Gender' => "'" . $_POST['inp_Gender'] . "'",
    'Password' => "'" . $_POST['inp_Password'] . "'",

);
save($registration);
function save($data)
{

    include('../config/database.php');

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));
    $query = "INSERT INTO registration ($attributes) VALUES ($values)";


     if ($conn->query($query) === TRUE) {
        header("location: /Event-Driven/index.php?success");
    } else {
        header("location: /Event-Driven/registration.php?invalid");
     }

    $conn->close(); 

}
