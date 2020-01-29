<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>PassMyBill</title>
        <link rel="stylesheet" href="finalProj.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
    padding: 3px;
}
    th{
        background-color: #efd9c1;
    }
    table{
        border: 1px solid #efd9c1;
    }
    body{
        background-color: #CCCBC6;
    }
    #tableContainer{
        background-color: #c7d8c6;
        width: 50%;
    }
</style>
</head>
<?php
$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

if (!$username) {
        $error = 'Must be logged in to see that page!';
        require "loginPage.php";
        exit;
    }

?>


<?php

echo "<body>";
echo "<a href='index.php'>Back to Homepage</a>";
echo "<div class='upcomingBillsCenter'>";
echo "<h1>Submitted bills from user: " .$username."</h1><br>";

$queryResults = "<div id='tableContainer'><table style='border: 1px solid black;
  border-collapse: collapse;'><tr>
<th>Bill ID</th>
<th>Sentiment Value</th>
<th># of Dem.</th>
<th># of Rep.</th>
<th>Bill Proposer</th>
<th>Date of Vote</th>
<th>Probability</th></tr>";



echo $queryResults;
$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];


echo $message;

if (!$username) {
        $error = 'Must be logged in to see that page!';
        //require "loginPage.php";
        exit;
    }
else{

    
        
        
        // Create connection
        $servername = "localhost";
        $serverusername = "loginUser";
        $serverpassword = "clay";
        $conn = new mysqli($servername, $serverusername, $serverpassword);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * from predictedBills.bills WHERE username = '$username' AND billID != ''";

        $result = $conn->query($sql);


        if ($result->num_rows >= 0 ) {
            
            while($row = $result->fetch_assoc()) {
                
            echo "<tr><td>".$row["billID"]."</td>".
                "<td>N/A</td>".
                "<td>".$row["numDem"]."</td>".
                "<td>".$row["numRep"]."</td>".
                "<td>".$row["billProposer"]."</td>".
                "<td>".$row["dateOfVote"]."</td>".
                "<td>N/A</td>".
                "</tr>";
                
                
                
    }
            
            echo "</table></div>";
         
            
            
        }else {
            $error = 'Error: Incorrect username or password';
			
        }


        $conn->close();
			
    
        
  
}
echo "</div>";
echo "</body>";
?>

</html>