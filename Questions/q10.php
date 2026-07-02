<?php
include "../db.php";

$sql = "
SELECT e.city, SUM(p.hours) AS total_hours
FROM Employees e
INNER JOIN Projects p ON e.emp_id = p.emp_id
GROUP BY e.city
";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['city'] . " - " . $row['total_hours'] . "<br>";
}
?>