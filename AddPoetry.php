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

// Request (get or post)
$POETRY = $_POST['poetry'];
$POETRY_NAME = $_POST['poet_name'];

// Decision
$query = "INSERT INTO poetry(poetry_data, poetry_name) VALUES ('$POETRY', '$POETRY_NAME')" ;

// Response
$result = $conn->query($query);

if($result == 1){
   $response = array("status" => "1","message" => "Successfully inserted");
}
else{
    $response = array("status" => "0","message" => "Successfully not inserted");
}

echo json_encode($response);

?>