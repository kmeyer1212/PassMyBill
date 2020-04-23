<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bill Prediction</title>
        <link rel="stylesheet" href="finalProj.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            form{
                background-color: #c7d8c6;
            }
        </style>
        <div class="topnav">
            <a href="index.php">Home</a>
            <a href="aboutUs.php">About Us</a>
            <a class="active" href="billPredictionPage.php">Bill Prediction</a>
            <a href="resultHistoryPage.php">Result History</a>
            <a href="upcomingBills.php">Upcoming Bills</a>
            <a href="educational.php">Educational Video</a>
            <a href="methodology.html">Methodology</a>
        </div>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2 class="col-md-12" id="header">Pass My Bill</h2>
            </div>
            <h3 id="billHeader"><u>Bill Prediction</u></h3>
            <div id="billCenter">
                <div id="billForm">
                    <br>
                    <form action="predictBill.php" method="get">
                        <input type="hidden" name="action" value="">
		        <p>Bill Id (H.R.): <input class="form-control" name="Bill" type="number" required></p>
			<p>Amount: <input class="form-control" name="amount" type="number" required></p>
                        <p>Registrant Name: <input class="form-control" name="registrantName" type="text" required></p>
                        <p>Issue Code: <input class="form-control" name="issueCode" type="text" required></p>
		
			<p>Bill Leaning (or who introduced it)<br>
				<input type="radio" id="DL" name="leaning" value="D" checked='checked'>
				<label for="DL">Democrat</label>
				<input type="radio" id="RL" name="leaning" value="R">
				<label for="RL">Republican</label>
				<input type="radio" id="BL" name="leaning" value="B">
				<label for="BL">Bi-partisan</label>
			</p>
			<p>House Majority (Currently is Democrat)<br>
				<input type="radio" id="DM" name="majority" value="D" checked='checked'>
				<label for="DM">Democrat</label>
				<input type="radio" id="RM" name="majority" value="R">
				<label for="RM">Republican</label>	
			</p>	
			
			<p>Client Name: <input class="form-control" name="clientName" type="text" required></p>
			<p>Lobbyist Names: <input class="form-control" name="lobbyistNames" type="text" required></p>
			<p>Show Feature Importance? <input class="form-control" name="featureImportance" type="checkbox"></p>
                        <p><button class="btn btn-primary" type="submit">Submit</button></p>
                    </form>
                <div>Note: Lobbying data associated with bill is cacluated automatically.</div>
                </div>
            </div>
        </div>
    </body>
</html>
