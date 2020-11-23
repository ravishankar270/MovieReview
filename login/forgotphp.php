<?php
   
//    $email = $_POST['email'];

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
            $to_email = mysqli_real_escape_string($con,$_POST['email']);
            $emailquery = "select * from `user` where `Email_id`='$to_email' ";
            $query = mysqli_query($con,$emailquery);
            $emailcount = mysqli_num_rows($query);

            if($emailcount){

                $userdata = mysqli_fetch_array($query);
                $username = $userdata['username'];
                $user_id = $userdata['user_id'];
                
                
                $subject = "Reset Password";
                $body = "Hi, $username, Click here to reset your password
                         http://localhost/login/login/reset_password.php?user_id=$user_id ";
                $sender_email = "From: movieratingwebsite@gmail.com";
                
                if(mail($to_email, $subject, $body, $sender_email)) {
                             echo "Email successfully sent to $to_email ...";
                            //  header('location:login.php');
                         } else {
                         echo "Email sending failed...";
                         }
            }
            else{
                echo "Email not Registered";
            }
        }
        else {
            echo "error2";
        }

    }



?>
