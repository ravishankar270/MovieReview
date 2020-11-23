<?php
   
   
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'moviereview');



// Try connecting to the Database
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {

        if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $password = mysqli_real_escape_string($con,$_POST['password']);
            $repassword = mysqli_real_escape_string($con,$_POST['repassword']);

            

            // $pass = password_hash($password, PASSWORD_BCRYPT);
            // $repass = password_hash($repassword, PASSWORD_BCRYPT);

            
            if($password === $repassword){

                $updatequery = "UPDATE `user` SET `password` = '$password' WHERE `user`.`Email_id` = '$email' ";

                $iquery = mysqli_query($con, $updatequery);

                if($iquery){
                    echo "Password changed successfully..Please go back to login page";
                }
                else{

                    echo "password not updated";
                }

            }

        else {
            echo "password not matching";
        }
        }

        else {
            echo "user not found";
        }
        

    
}



?>
