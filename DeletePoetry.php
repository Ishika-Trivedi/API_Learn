<?php

$servername = "localhost";
$username = "root";
$password = " ";
$db = "poetrydb";

// Database Connection
$conn = new mysqli($servername, $username, $password, $db);

if($conn -> connect_error){
    die("connection failed: " .$conn->connect_error);
}

$p_id = $_POST['poetry_id'];

$query = "DELETE FROM poetry WHERE id = $p_id ";

$result = $conn->query($query);

if($result){
    $response = array("status" => "1", "message" => "successfully deleted");
}

else{
    $response = array("status" => "0", "message" => "not successfully deleted");
}

echo json_encode($response);


?>