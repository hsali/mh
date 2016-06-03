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

$sql = "select * from student";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
        $arr=array();
    while($row = $result->fetch_assoc()) {
        array_push($arr,
            array(
            "id"=>$row["id"],
            "first"=>$row["first"],
            "last"=>$row["last"],
            "fee"=>$row["fee"]));
    }

    echo json_encode($arr);
} else {
    echo "0 results";


}

$conn->close();
