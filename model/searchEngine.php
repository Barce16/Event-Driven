<?php
include('../config/database.php');

$value = $_POST['search'];// data that connect to function search.js

$sql = "SELECT * FROM register WHERE id like '%$value%'";
$result = $conn->query($sql); //connected to search.js

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        ?>
        <!-- database -->
        <tr>
            <td style="text-align : center;">
                <?= $row['ID'] ?>
            </td>
            <td>
                <?= $row['FName'] ?>
                <?= $row['LName'] ?>
            </td>
        <!-- database -->

        <!-- Buttons -->
            <td class="d-grid">
                <button type="button" class="btn btn-sm btn-block
            btn-link" data-bs-toggle="modal" data-bs-target="#show-details">
                    show detail</button>
            </td>
        <!-- Buttons -->   
        
        <!-- database -->
        </tr>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>