<?php
include "../db.php";

$sql = "SELECT first_name, LOCATE('a', first_name) AS position FROM Employees";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['first_name'] . " - " . $row['position'] . "<br>";
}
?>