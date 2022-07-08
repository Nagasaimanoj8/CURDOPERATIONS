<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Curd";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
// // $sql = "CREATE DATABASE Curd";
// // if ($conn->query($sql) === TRUE) {
// //   echo "Database created successfully";
// // } else {
// //   echo "Error creating database: " . $conn->error;
// // }
// $sql = "CREATE TABLE curdoperations(
//     id int PRIMARY KEY AUTO_INCREMENT,
//     lastname varchar(255),
//     firstname varchar(255),
//     email varchar(255),
//     mobile varchar(255))";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }
?>