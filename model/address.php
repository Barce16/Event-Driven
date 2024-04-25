<?php
if(isset($_POST["type"])){
$type = $_POST["type"];
$code = $_POST["past_Code"];

if($type == "region"){
    getProvince($code);   
}elseif ($type == "province"){
getCitymun($code);
}elseif ($type == "citymun"){
getbrgy($code);
}

}
function getProvince($regCode)
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
 function getCitymun($provCode)
{

    include('../config/database.php');

                     $sql = "SELECT * FROM ph_citymun Where provCode = '$provCode'";
                     $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                 // output data of each row
                     while($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?= $row["citymunCode"] ?>"><?= $row ["citymunDesc"] ?></option>
                    <?php
                  }
                     } else {
                     echo "0 results";
                     }
                     $conn->close();

 }
 function getbrgy($citymunCode)
 {
 
     include('../config/database.php');
 
                      $sql = "SELECT * FROM ph_brgy Where citymunCode = '$citymunCode'";
                      $result = $conn->query($sql);
 
                      if ($result->num_rows > 0) {
                  // output data of each row
                      while($row = $result->fetch_assoc()) {
                     ?>
                     <option value="<?= $row["brgyCode"] ?>"><?= $row ["brgyDesc"] ?></option>
                     <?php
                   }
                      } else {
                      echo "0 results";
                      }
                      $conn->close();
 
  }