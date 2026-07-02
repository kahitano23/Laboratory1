<?php
include "../db.php";

$sql = "
SELECT DISTINCT e.emp_id
FROM Employees e
INNER JOIN Projects p ON e.emp_id = p.emp_id
";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['emp_id'] . "<br>";
}
?>