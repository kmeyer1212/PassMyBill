<!--
Name: Clayton Cornett
Pawprint: CSCYRD
Date: 12/06/2019
Challenge: Final Project
-->


<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="finalProj.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <style>
            body {
                background-color: #CCCBC6;
            }
            #loginForm{
                background-color: #c7d8c6;
            }
        </style>
    </head>
    <body>
        <div id="container">
        
        
        <center>
            <u><h3>Log in</h3></u>
            <?php echo $error; ?>
            <div id="loginForm">
                <br>
                <form action="handleLogin.php" method="post">
                <input type="hidden" name="action" value="login_user">
                    <p>Username: <input class="form-control" name="username" type="text" required></p>
                    <p>Password: <input class="form-control" name="password" type="password" required></p>
                    <p><button class="btn btn-primary" type="submit">Submit</button></p>
                </form>
                <div>Not a user? <a href="createAccountPage.php">Create an account</a></div>
            </div>
        </center>
        
        </div>
    </body>
</html>