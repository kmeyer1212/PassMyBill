<?php

//$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

//if ($username) {
//        header("Location: index.php");
//        exit;
//    }


$action = empty($_POST['action']) ? '' : $_POST['action'];

	if ($action == 'login_user') {
		handle_login();
	} else {
		login_form();
	}

	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
        
        // Create connection
        $servername = "localhost";
        $serverusername = "loginUser";
        $serverpassword = "clay";
        $conn = new mysqli($servername, $serverusername, $serverpassword);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * from users.user WHERE username = '$username' AND password = '$password'";

        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            setcookie('username', $username);
            header("Location: index.php");
            }
         else {
            $error = 'Error: Incorrect username or password';
			require "loginPage.php";
        }


        $conn->close();
			
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "loginPage.php";
	} 


?>