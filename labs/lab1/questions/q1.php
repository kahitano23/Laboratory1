<?php
include "../db.php";

$sql = "SELECT UPPER(CONCAT(first_name,' ',last_name)) AS fullname FROM Employees";
$result = mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
    echo $row['fullname']."<br>";
}
?>