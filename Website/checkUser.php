<?php

        $servername = "localhost";
        $serverusername = "createUser";
        $serverpassword = "clay";
        $dbname = "users";
        $conn = new mysqli($servername, $serverusername, $serverpassword, $dbname);

        $username = $_POST["username"];
        $password = $_POST["password"];

        // Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlCheck = "SELECT * FROM users.user WHERE username = '$username'";

$result = $conn->query($sqlCheck);
$num_rows = $result->num_rows;
if ($num_rows > 0) {
    $error = "Username already taken!";
    require "createAccountPage.php";
} 

else{
    $conn->close();
    require "createAccount.php";
}






$conn->close();

?>