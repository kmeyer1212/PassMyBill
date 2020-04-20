<?php
    
//        echo("Hello!!");
  //      $servername = "localhost";
    //    $serverusername = "root";
      //  $serverpassword = "password";
       // $dbname = "PassMyBill";
        //$conn = new mysqli($servername, $serverusername, $serverpassword, $dbname);
	$file = fopen("history.txt", "a") or die("Unable to write to history");
	$amount = $_GET["amount"];
        $registrantName = $_GET["registrantName"];
        $clientName = $_GET["clientName"];
        $lobbyistNames = $_GET["lobbyistNames"];
        $issueCode = $_GET["issueCode"];
        $leaning = $_GET["leaning"];
	$majority = $_GET["majority"];
	$checkbox = $_GET['featureImportance'];
	$bill = $_GET["Bill"];
	$featureImportance = '0';
	if(isset($checkbox))
	{
		$featureImportance = '1';
	}
	$output=shell_exec("python script.py '".$amount."' '".$clientName."' '".$issueCode."' '".$leaning."' '".$lobbyistNames."' '".$majority."' '".$registrantName."' '".$featureImportance."'");
	$output1 = "H.R. ".$bill."<br>".$output;
	echo $output1;
	fwrite($file, $output1);
	fclose($file);
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

        $servername = "PassMyBill";
    $serverusername = "root";
    $serverpassword = "password";
    $serverlink = "localhost";

    $newBill = "H.R. " .$bill;

    $conn = new mysqli($serverlink, $serverusername, $serverpassword);
    //@mysql_select_db($servername) or die ("Unable to connect to PassMyBill");

    // Check connection
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
        echo("Connection Failed");
    }
    else {
        echo("Connection Successful!");
    }

    $sql = "INSERT INTO submittedBills (billId, amount, registrantName, clientname, lobbyistNames, issueCode, leaning, majority, feature, prediction)
VALUES (".$newBill. ",".$amount.",".$registrantName.",".$clientName.",".$lobbyistNames.",".$issueCode.",".$leaning.",".$majority.",".$featureImportance.",".$output.")";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
<body>
<br>
<a href="/resultHistoryPage.php">See all History</a>
</body>
</html>
