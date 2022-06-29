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

// Request
$POETRY = $_POST['Poetry_data'];
$ID = $_POST['id'];

// Decision
$query = "UPDATE poetry SET Poetry_data = $POETRY WHERE id = $ID";

$result = $conn->query($query);

if($result){
    $response = array("status"=>"1","message"=>"successfully updated");
}

else{
    $response = array("status"=>"0","message"=>"successfully not updated");
}

echo json_encode($response);
?>