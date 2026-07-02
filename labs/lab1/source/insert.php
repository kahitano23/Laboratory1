<?php
include "db.php";

mysqli_query($conn,"INSERT INTO Employees VALUES
(1,'Alice','Smith',28,55000.50,'Manila'),
(2,'Bob','Jones',34,42000.75,'Cebu'),
(3,'Charlie','Brown',22,38000.00,'Davao'),
(4,'Diana','Prince',29,60000.25,'Manila'),
(5,'Evan','Wright',45,75000.90,'Cebu')
");

mysqli_query($conn,"INSERT INTO Projects VALUES
(101,1,'Website Redesign',15000,120),
(102,2,'Mobile App',25000,200),
(103,1,'Database Migration',30000,150),
(104,6,'Cloud Setup',40000,300),
(105,NULL,'Security Audit',10000,50)
");

echo "Data Inserted!";
?>