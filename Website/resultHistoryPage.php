<!DOCTYPE html> 
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <title>Result History</title>
        <link rel="stylesheet" href="finalProj.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="menuButtons.js"></script>
        <div class="topnav">
            <a href="index.php">Home</a>
            <a href="methodology.html">Methodology</a>
            <a href="billPredictionPage.php">Bill Prediction</a>
            <a class="active" href="resultHistoryPage.php">Result History</a>
            <a href="upcomingBills.php">Upcoming Bills</a>
            <a href="educational.php">Educational Video</a>
            
        </div>
    </head>
    <body>
        <div class="siteColor">            
            <div  class="row">
                <h2 class="col-md-12" id="header">Pass My Bill</h2>
            </div>
                <div class="col-md-7">
                    <h4><u>Result History</u></h4>
		    <br>
			<h5>Displaying 10 most recent entries</h5>
			<table>
			<tr>
			<th>Bill Id</th><th>Amount</th><th>Registrant Name</th><th>Client Name</th><th>Lobbyist Names</th><th>Issue Code</th><th>Leaning</th><th>Majority</th><th>Prediction</th>
			</tr>
			<?php
			$conn = mysqli_connect('localhost', 'username', 'password123', 'PassMyBill');
			if(!$conn) {
				die("Connection failed to database");
			}
			$sql = "SELECT billId, amount, registrantName, clientname, lobbyistNames, issueCode, leaning, majority, prediction FROM submittedBills ORDER BY id DESC LIMIT 10";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result)) 
				{
					echo "<tr><td>".$row[billId]."</td><td>".$row[amount]."</td><td>".$row[registrantName]."</td><td>".$row[clientname]."</td><td>".$row[lobbyistNames]."</td><td>".$row[issueCode]."</td><td>".$row[leaning]."</td><td>".$row[majority]."</td><td>".$row[prediction]."</td></tr>";
				}
			}
			else
			{
				echo("0 results");
			}
			$conn->close();
?>
			</table>
		</div>
            </div>
    </body>
</html>
