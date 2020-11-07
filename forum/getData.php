<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'moviereview';

// Create connection
$conn = new mysqli( $servername, $username, $password, $dbname );
if ( $conn->connect_error ) {
    die( 'Connection failed: ' . $conn->connect_error );
}
$array = json_decode( $_GET['q'] );
$id = intval( $array[1] );

$type = strval( $array[2] );
if ( $type === 'like' ) {
    // $dislikes=strval($array[3])-1;
    $like = intval( $array[0] )+1;
    $sql = 'UPDATE comments SET likes ='.$like.' WHERE comment_id ='.$id;
    // $sql1='UPDATE comments SET dislikes ='.$dislike.' WHERE comment_id ='.$id;
} else {
    
    $like = intval( $array[0] )-1;
    $sql = 'UPDATE comments SET dislikes ='.$like.' WHERE comment_id ='.$id;
    // $sql1 = 'UPDATE comments SET likes ='.$like.' WHERE comment_id ='.$id;

}

if ( $conn->query( $sql ) === TRUE ) {
    echo $like;
} else {
    echo 'Error updating record: ' . $conn->error;
}

$conn->close();

// Check connection

?>