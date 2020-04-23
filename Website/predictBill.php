<!DOCTYPE html> 
<html lang="en">
        <head>
        <meta charset="utf-8">
        <title>Bill Prediction</title>
        <link rel="stylesheet" href="finalProj.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2 class="col-md-12" id="header">Pass My Bill</h2>
            </div>
            <h3 id="billHeader"><u>Bill Prediction</u></h3>
            <br>
            <a href="/resultHistoryPage.php">See all History</a>
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

               $servername = "PassMyBill";
               $serverusername = "root";
               $serverpassword = "password";
               $serverlink = "localhost";

               $newBill = "H.R. " .$bill;

               $conn = new mysqli($serverlink, $serverusername, $serverpassword);

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
                echo "End of script";
            ?>
        </div>
    </body>
</html>
