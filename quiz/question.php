<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'moviereview');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else {
        $sql="SELECT * from user where user_id=32";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)) {
                echo $row['Email_id'];
            }
        }
                
      }
                
?>
<script>

const quiz = [
    {
        q: "What is the Joker's name",
        options:['Arthur Fleck','Damion Millbourne','Sedrick Gaylord','Bruce Willis'],
        answer:0
    },
    {
        q: 'Why does everyone begin to notice Joker?',
        options:['He dies','He kills Batmans parents','He started a stir with 3 people on a train','He destroyed Arkham Asylum'],
        answer:2
    },
    {
        q: 'Where does Joker live?',
        options:['The moon','Gotham City','Arkham City','Florida'],
        answer:1
    }
]

</script>
