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
            <div class="row">
                <h2 class="col-md-12" id="header">Pass My Bill</h2>
            </div>
            <div class="row">
                <div class="col-md-4" id="dynamicList">
                    <?php require 'Template.php';
                          $page = new Template();
                          $result = $page->build('page.tmpl');
                          print $result;
                    ?>
                </div>
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