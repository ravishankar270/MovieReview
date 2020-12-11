<?php
   
//    $email = $_POST['email'];

include('../connectdb.php');
    if($conn->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

        if(isset($_POST['submit'])){
            $to_email = mysqli_real_escape_string($conn,$_POST['email']);
            $emailquery = "select * from `user` where `Email_id`='$to_email' ";
            $query = $conn->query($emailquery);
            $emailcount = $query->num_rows;

            if($emailcount){

                $userdata = $query->fetch_assoc();
                $username = $userdata['username'];
                $Email_id = $userdata['Email_id'];
                
                
                $subject = "Reset Password";
                $body = "Hi, $username, Click here to reset your password
                         http://localhost/login/login/reset_password.php?Email_id=$Email_id ";
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
