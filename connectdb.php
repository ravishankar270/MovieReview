<?php
  //       development
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="moviereview";
        
        // remote sql
        // $servername = "remotemysql.com";
        // $username = "buU5l6jIDM";
        // $password = "v2BL9f8Kwy";
        // $dbname="buU5l6jIDM";
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname="moviereview";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    
    // Check connection
    
?>