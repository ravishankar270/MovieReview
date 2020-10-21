<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="forum.css?v=<?php echo time(); ?>" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FORUM</title>
</head>
<body>
    <?php
    session_start();
    
    if (!isset($_SESSION['access_token'])){
        header("url: ..login/login.php");
    }
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="moviereview";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        if($_POST['post']!=""){
            $desc=$_POST['post'];
        $sql="insert into comments (theory_id,user_id, comments,likes,dislikes) values (2, 1,'$desc',20,30)";
        mysqli_query($conn,$sql);
        unset($_POST['post']);
        }
    }

    
    
    // Check connection
    
        
        $sql="select comments,likes,dislikes from comments";
        $result = $conn->query($sql);
        
        
        
    ?>
    <div class="forum">
    <div class='question'>
        <h1>What is your Favourite movie</h1>
        <form class="create-post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='POST'>
        <textarea class="post" name="post" required></textarea>
        <input type="submit" name="create" value="POST" focus/>
        </form>



    </div>
    <hr/>
    <div class="comments">
    <?php
    while($row = $result->fetch_assoc()) {
        echo "<div class=\"desc\">".$row['comments']."
        <div class=\"content\">
        <i class=\"fa fa-thumbs-o-up\" style=\"font-size:14px\">".$row['likes']."</i>
        <i class=\"fa fa-thumbs-o-down\" style=\"font-size:14px\">".$row['dislikes']."</i>
        </div>
        </div>" ;
      }
    ?>
    </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.15.0/basic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'post' );
    </script>
    
</body>
</html>