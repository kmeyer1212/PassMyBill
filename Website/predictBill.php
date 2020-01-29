<?php

        $servername = "localhost";
        $serverusername = "createUser";
        $serverpassword = "clay";
        $dbname = "users";
        $conn = new mysqli($servername, $serverusername, $serverpassword, $dbname);

        $username = $_COOKIE["username"];
        $billID = $_GET["billID"];
        $numOfDem = $_GET["numOfDem"];
        $numOfRep = $_GET["numOfRep"];
        $billProposer = $_GET["billProposer"];
        $dateOfVote = $_GET["dateOfVote"];

        // Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "INSERT INTO predictedBills.bills (username, billID, sentimentValue, numDem, numRep, billProposer, dateOfVote) VALUES ('$username', '$billID', 'N/A', '$numOfDem', '$numOfRep', '$billProposer', '$dateOfVote')";

if ($conn->query($sql)) {
    $message = "Successfully added new Bill!";
    header("Location: mySubmittedBills.php");
} else {
    $error = "Error with input!";
    require "billPredictionPage.php";
}
    





$conn->close();


?>