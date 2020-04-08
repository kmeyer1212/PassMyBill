<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Upcoming</title>
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
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="aboutUs.php">About Us</a>
        <a href="billPredictionPage.php">Bill Prediction</a>
        <a href="resultHistoryPage.php">Result History</a>
        <a class="active" href="upcomingBills.php">Upcoming Bills</a>
        <a href="educational.php">Educational Video</a>
        <a href="mySubmittedBills.php">My Bills</a>
    </div>
</head>
<?php
    echo "<body>";
    echo "<div class='upcomingBillsCenter'>";
    echo "<h1>Upcoming Bills</h1><br>";
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
    echo $message;
    
    // Create connection
    $servername = "PassMyBill";
    $serverusername = "root";
    $serverpassword = "password";
    $conn = new mysqli($servername, $serverusername, $serverpassword);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        echo("Connection Successful!");
    }

    $sql = "SELECT * from predictedBills.bills WHERE billID != '' AND dateOfVote > CURRENT_TIMESTAMP";
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
        echo "</table></div>
        <div>Note: this is a collection of all user submitted bills that have not been voted on yet</div>";
        echo "</div>";    
    }else {
        $error = 'Error';
    }
    $conn->close();  
    echo "</body>";
?>
</html>