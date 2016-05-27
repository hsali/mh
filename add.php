<?php
/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 5/27/16
 * Time: 4:32 PM
 */

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into student(first, last, fee)
VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["fee"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
