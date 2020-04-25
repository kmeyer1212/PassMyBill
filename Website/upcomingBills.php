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
        <a href="methodology.html">Methodology</a>
    </div>
</head>
<div class="siteColor">
    <div class="row">
        <h2 class="col-md-12" id="header">Pass My Bill</h2>
    </div>
<body><div class='upcomingBillsCenter'><h1>Upcoming Bills</h1><br><div id='tableContainer'><table style='border: 1px solid black;
        border-collapse: collapse;'>
    <tr>
        <th>Bill ID</th>
        <th>Issue Code</th>
        <th>Lobbying Amount(USD)</th>
        <th>Registrant Name</th>
        <th>Client Name</th>
        <th>Lobbyist Names</th>
        <th>Bill Proposer(D/R)</th>
        <th>House Majority(D)</th>
        <th>Total Yes</th>
    </tr>
    <tr>
        <td>HR 6496</td>
        <td>FINANCIAL INSTITUTIONS/INVESTMENTS/SECURITIES</td>
        <td>$100,000</td>
        <td>McDermott Will & Emery LLP</td>
        <td>PACIFIC CAPITAL BANK N A</td>
        <td>['JOHNSON, CALVIN P', 'HATCH, PAUL D', 'DATRI, JAMES E']</td>
        <td>Tim Ryan(D)</td>
        <td>D</td>
        <td>237</td>
    </tr>
        <tr>
        <td>HR 6496</td>
        <td>FINANCIAL INSTITUTIONS/INVESTMENTS/SECURITIES</td>
        <td>$500,000</td>
        <td>Visa Inc.</td>
        <td>VISA INC</td>
        <td>['NELSON, LISA', 'MACCARTHY, MARK', 'SMITH, LAMAR']</td>
        <td>Tim Ryan(D)</td>
        <td>D</td>
        <td>252</td>
    </tr>
        <tr>
        <td>HR 6496</td>
        <td>FINANCIAL INSTITUTIONS/INVESTMENTS/SECURITIES</td>
        <td>$1,000,000</td>
        <td>The Goldman Sachs Group, Inc.</td>
        <td>GOLDMAN SACHS GROUP INC</td>
        <td>['SHIRZAD, FARYAR', 'PATTERSON, MARK A', 'COSTELLO, ANN', 'DOSWELL, W CARTER', 'THOMAS, MARTI']</td>
        <td>Tim Ryan(D)</td>
        <td>D</td>
        <td>237</td>
    </tr>
        <tr>
        <td>HR 6496</td>
        <td>FINANCIAL INSTITUTIONS/INVESTMENTS/SECURITIES</td>
        <td>$10,000,000</td>
        <td>The Goldman Sachs Group, Inc.</td>
        <td>GOLDMAN SACHS GROUP INC</td>
        <td>['SHIRZAD, FARYAR', 'PATTERSON, MARK A', 'COSTELLO, ANN', 'DOSWELL, W CARTER', 'THOMAS, MARTI']</td>
        <td>Tim Ryan(D)</td>
        <td>D</td>
        <td>238</td>
    </tr>
        <tr>
        <td>HR 6496</td>
        <td>FINANCIAL INSTITUTIONS/INVESTMENTS/SECURITIES</td>
        <td>$100,000</td>
        <td>The Goldman Sachs Group, Inc.</td>
        <td>GOLDMAN SACHS GROUP INC</td>
        <td>['SHIRZAD, FARYAR', 'PATTERSON, MARK A', 'COSTELLO, ANN', 'DOSWELL, W CARTER', 'THOMAS, MARTI']</td>
        <td>Tim Ryan(D)</td>
        <td>D</td>
        <td>237</td>
    </tr>
    </table>
    </div>
    </div>
    </body>
    </div>
</html>



<!--
<div class="container">
    <div class="row">
        <h2 class="col-md-12" id="header">Pass My Bill</h2>
    </div>
-->
<?php
/*
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
    
    // Create connection
    $servername = "PassMyBill";
    $serverusername = "root";
    $serverpassword = "password";
    $serverlink = "localhost";
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
    </div>
    </html>
 */
