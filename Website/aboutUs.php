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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
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
            
            <div class="row">
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
                
                
                <div class="col-md-7">
                    <h4><u>About Us</u></h4>
                    <div>We are a group of Computer Science Seniors at Mizzou who are trying to build an amazing Capstone Project: PassMyBill.
                    <br>
                    This web application uses machine learning to predict the probability of a legislative bill passing into a law.</div>
                   
                    <br>
                    
                    <div id="meetTheTeam">
                    <h4><u>Meet the Team</u></h4>
                    <br>
                    <div class="imageRow">
                    <div class="team">Clay<img class="magnify" src="clay.png" alt="img"></div>
                    <div class="team">Carolyn<img class="magnify" src="caro.png" alt="img"></div>
                    <div class="team">Elita<img class="magnify" src="elita.png" alt="img"></div>
                    <div class="team">Kyle<img class="magnify" src="kyle.png" alt="img"></div>
                    <div class="team">Max<img class="magnify" src="max.jpg" alt="img"></div>
                    </div>
                    
                    </div>
                    
                </div>
                
            </div>
        
        </div>
        
    </body>
</html>