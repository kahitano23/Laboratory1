<?php
include "../db.php";

$sql = "
SELECT e.first_name, e.last_name, p.proj_name
FROM Employees e
INNER JOIN Projects p ON e.emp_id = p.emp_id
";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['first_name'] . " " . $row['last_name'] . " - " . $row['proj_name'] . "<br>";
}
?>