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
            <a href="mySubmittedBills.php">My Bills</a>
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
                        <p>Bill ID: <input class="form-control" name="billID" type="text" required></p>
                        <p>Bill PDF: <input class="form-control" name="billFile" type="file"></p>
                        <p># of Democrats: <input class="form-control" name="numOfDem" type="text" required></p>
                        <p># of Republicans: <input class="form-control" name="numOfRep" type="text" required></p>
                        <p>Bill Proposer: <input class="form-control" name="billProposer" type="text" required></p>
                        <p>Date of Vote: <input class="form-control" name="dateOfVote" type="text" placeholder="YYYY-MM-DD" required></p>
                        <p><button class="btn btn-primary" type="submit">Submit</button></p>
                    </form>
                <div>Note: Lobbying data associated with bill is cacluated automatically.</div>
                </div>
            </div>
        </div>
    </body>
</html>