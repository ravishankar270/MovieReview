<?php
   
   include('../connectdb.php');
    if($conn->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

        if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);
            $repassword = mysqli_real_escape_string($conn,$_POST['repassword']);

            

            // $pass = password_hash($password, PASSWORD_BCRYPT);
            // $repass = password_hash($repassword, PASSWORD_BCRYPT);

            
            if($password === $repassword){

                $updatequery = "UPDATE `user` SET `password` = '$password' WHERE `user`.`Email_id` = '$email' ";

                $iquery = $conn->query($updatequery);

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
