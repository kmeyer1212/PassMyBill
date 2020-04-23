<?php
    
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
	
	
    $conn = mysqli_connect('localhost', 'username', 'password123','PassMyBill');
    $newBill = "H.R. ".$bill;
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }
    echo("Connection Successful!");

    $sql = "INSERT INTO submittedBills(billId, amount, registrantName, clientname, lobbyistNames, issueCode, leaning, majority, feature, prediction)
VALUES ('$newBill','$amount','$registrantName','$clientName','$lobbyistNames','$issueCode','$leaning','$majority','$featureImportance','$output')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
