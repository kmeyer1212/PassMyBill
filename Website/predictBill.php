<?php
    
//        echo("Hello!!");
  //      $servername = "localhost";
    //    $serverusername = "root";
      //  $serverpassword = "password";
       // $dbname = "PassMyBill";
        //$conn = new mysqli($servername, $serverusername, $serverpassword, $dbname);

        $amount = $_GET["amount"];
        $registrantName = $_GET["registrantName"];
        $clientName = $_GET["clientName"];
        $lobbyistNames = $_GET["lobbyistNames"];
        $issueCode = $_GET["issueCode"];
        $leaning = $_GET["leaning"];
        $majority = $_GET["majority"];
        $output = shell_exec('python /home/pi/Desktop/PythonScript.py ' .$amount .$clientName .$issueCode .$leaning .$lobbyistNames .$majority .$registrantName);
        echo $output;
        // Create connection
        //$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        /*if ($conn->connect_error) {
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
        $conn->close();*/
?>
