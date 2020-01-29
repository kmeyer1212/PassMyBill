<!--
Name: Clayton Cornett
Pawprint: CSCYRD
Date: 12/06/2019
Challenge: Final Project
-->
<!DOCTYPE html> 
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <title>PassMyBill</title>
        <link rel="stylesheet" href="finalProj.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="menuButtons.js"></script>
    </head>
    <body>
        <div class="container">
        
            <div id="loginButton" class="row">
                <?php 
                $username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
                if($username == ''){
                echo '<div class="col-md-12"><a href="loginPage.php">Login</a></div>';
                }
                else{
                    echo '<div class="col-md-12">Logged in as: '.$username.' - <a href="logout.php">Logout</a></div>';
                }
            
                ?>
            </div>
            
            <div class="row">
                <h2 class="col-md-12" id="header">Pass My Bill</h2>
            </div>
            
            <div class="row" >
                <div class="col-md-4">
<!--
                <ul id="options">
                    <li id="homePage">Home</li>
                    <li id="aboutUsPage">About Us</li>
                    <li id="futureBillPredictionPage">Future Bill Prediction</li>
                    <li id="resultHistoryPage">Result History</li>
                    <li id="upcomingBillsPage">Upcoming Bills</li>
                    <li id="educationalVideoPage">Educational Video</li>
                    <li id="mySubmittedBillsPage">My Submitted Bills</li>
                </ul>


-->
                    
                    <?php require 'Template.php';

                          $page = new Template();
                         
                          $result = $page->build('page.tmpl');

                          print $result;
                    
                    ?>
                
                </div>
                
                
                <div id="mainContent" class="col-md-7">
                    <h4><u>Educational Video</u></h4>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/66f4-NKEYz4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                </div>
                
            </div>
        
        </div>
    </body>
</html>