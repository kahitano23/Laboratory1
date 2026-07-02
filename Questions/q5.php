<?php
include "../db.php";

$sql = "SELECT first_name, age,
CASE
    WHEN age % 2 = 0 THEN 'Even'
    ELSE 'Odd'
END AS type
FROM Employees";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['first_name'] . " (" . $row['age'] . ") - " . $row['type'] . "<br>";
}
?>