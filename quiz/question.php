<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'moviereview');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$result = mysqli_query($conn, "SELECT * FROM questions");


$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}                
echo json_encode($data);
exit();     
?>



