<?php
include "../db.php";

$sql = "
SELECT e.first_name,
LPAD(e.last_name,10,'*') AS last_name,
p.proj_name
FROM Employees e
LEFT JOIN Projects p ON e.emp_id = p.emp_id
";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['first_name'] . " " . $row['last_name'] . " - " . $row['proj_name'] . "<br>";
}
?>