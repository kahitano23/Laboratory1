<?php
$conn = mysqli_connect("localhost", "root", "");

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS company_db");
mysqli_select_db($conn, "company_db");

mysqli_query($conn,"
CREATE TABLE Employees(
emp_id INT PRIMARY KEY,
first_name VARCHAR(50),
last_name VARCHAR(50),
age INT,
salary DECIMAL(10,2),
city VARCHAR(50)
)");

mysqli_query($conn,"
CREATE TABLE Projects(
proj_id INT PRIMARY KEY,
emp_id INT,
proj_name VARCHAR(100),
budget DECIMAL(10,2),
hours INT
)");

echo "Tables Created!";
?>