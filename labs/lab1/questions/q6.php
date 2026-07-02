<?php
include "../db.php";

$sql = "
SELECT emp_id FROM Employees
UNION ALL
SELECT emp_id FROM Projects
";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['emp_id'] . "<br>";
}
?>