<!DOCTYPE html> 
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <title>PassMyBill</title>
        <link rel="stylesheet" href="finalProj.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="menuButtons.js"></script>
        <div class="topnav">
            <a class="active" href="index.php">Home</a>
            <a href="aboutUs.php">About Us</a>
            <a href="billPredictionPage.php">Bill Prediction</a>
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
            <div class="row">
                <div id="mainContent" class="col-md-7">
                    <h4><u>Home</u></h4>
                    <div>PassMyBill is a web application that uses machine learning to predict the outcome of a legislative bill.
                    <br>
                    All machine learning is done through AutoML</div>
                    <br>
                    <img src="bill.jpg" style="width: 200px; height: 250px;" alt="bill">
                    <br>
                    <br>
                    <div id="countdown"></div>
                    <script src="countdownAJAX.js"></script>            
                    <script>
                    $.get("appData.php", function(data) {
                        $("#dynamicList").html(data.list);
                    }
                    </script>
                </div>
            </div>
        </div>
    </body>
</html>
