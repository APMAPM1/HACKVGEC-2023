<?php 
    

	session_start();
	include("dbconfig.php");

    $user_check = $_SESSION['A_Username'];
    $password = md5($_POST['A_Password']);

    $ses_sql = mysqli_query($conn,"SELECT * FROM admin WHERE Admin_Username ='$user_check'");

    $row(mysqli_fetch_array($ses_sql));
    $login_session = $row['username'];

    if(isset($_POST['A_Username'])){
        header(Locaton:login.php);
        die();
    }



?>