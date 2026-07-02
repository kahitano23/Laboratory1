<?php
include "../db.php";

$sql = "SELECT first_name, ROUND(salary,1) AS salary FROM Employees";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['first_name'] . " - " . $row['salary'] . "<br>";
}
?>