<?php
if(isset($_POST["type"])){
$type = $_POST["type"];
$code = $_POST["past_Code"];

if($type == "region"){
    getProvicne($code);   
}
}
function getProvicne($regCode)
{

    include('../config/database.php');

                     $sql = "SELECT * FROM ph_province Where regCode = '$regCode'";
                     $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                 // output data of each row
                     while($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?= $row["provCode"] ?>"><?= $row ["provDesc"] ?></option>
                    <?php
                  }
                     } else {
                     echo "0 results";
                     }
                     $conn->close();

 }