<?php
include "../db.php";

$sql = "SELECT MIN(age) AS youngest, MAX(age) AS oldest FROM Employees";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "Youngest: " . $row['youngest'] . "<br>";
echo "Oldest: " . $row['oldest'];
?>