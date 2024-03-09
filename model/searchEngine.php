<?php
include('../config/database.php');

$value = $_POST['search'];

$sql = "SELECT * FROM guest Where (Fname LIKE '%$value%' OR Guest_ID  LIKE '%$value%')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td style="text-align : center;">
                <?= $row['Guest_ID'] ?>
            </td>
            <td>
                <?= $row['Fname'] ?>
            </td>

            <td class="d-grid">
                <button type="button" class="btn btn-sm btn-block
            btn-link" data-bs-toggle="modal" data-bs-target="#show-details">
                    show detail</button>
            </td>
        </tr>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>