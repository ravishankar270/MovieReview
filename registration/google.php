<?php
require_once('googleapis/vendor/autoload.php');

    $google_client=new Google_client();
    $google_client->setClientId("16817687725-0vn2hhn7m3pdfuk7mcukjmgutb5mj88s.apps.googleusercontent.com");
    $google_client->setClientSecret('fmkbIn_UKTwgKKIn8uH-R3CX');
    $google_client->setRedirectUri('http://localhost/login/registration/home.php');
    
    $google_client->addScope('email');
    $google_client->addScope('profile');
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="moviereview";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    
    
    ?>