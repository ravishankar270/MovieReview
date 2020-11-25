<?php
$cookie_name = "user_likes";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="forum.css?v=<?php echo time(); ?>" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3e55b52515.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FORUM</title>
</head>
<body>
    <?php
    session_start();
    
    if (!isset($_SESSION['id'])){
        header("url: ..login/login.php");
    }
    
    include('../connectdb.php');
    if(isset($_GET['q'])){

     $array =explode("," ,$_GET['q']);

     $a=intval($array[0]);
     $sql="select comment_id,comments,likes,dislikes,theory_id from comments where theory_id =$a order by comment_id DESC" ;
     $result = $conn->query($sql) or die($conn->error);
     $_SESSION['id']=$a;
     $_SESSION['question']=$array[1];
     
    }
    $id=$_SESSION['id'];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['post']) && $_POST['post']!==""){
                    $desc=$_POST['post'];
                    $desc = strip_tags($desc);
                    $sql="insert into comments (theory_id,user_id, comments,likes,dislikes) values ($id, 1,'$desc',0,0)";
                    mysqli_query($conn,$sql);
                    
                    unset($_POST['post']);
                    }
    }

    
    
    // Check connection
        
        
        $sql="select comment_id,comments,likes,dislikes,theory_id from comments where theory_id =$id order by comment_id DESC" ;
        $result = $conn->query($sql) or die($conn->error);
    
        
        $conn->close();
        
    ?>

    <script>
    function likes(ele,id){
       
        if(ele.name=='like'){
            lid="d"+String(id)
            lid=document.getElementById(lid).value
        }else if(ele.name=='dislikes'){
            
            lid=document.getElementById(id).value
        }
        const data=[ele.value,id,ele.name,lid]
        const json=JSON.stringify(data)
        
        var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(xmlhttp.responseText)
                if (ele.name==='like'){
                document.getElementById(id).innerHTML=xmlhttp.responseText;
                document.getElementById(id).style.color="blue"
                }else{
                    id="d"+String(id)
                    document.getElementById(id).innerHTML=xmlhttp.responseText;
                    document.getElementById(id).style.color="blue"
            }

      }
    };
    xmlhttp.open("GET","getData.php?q="+json,true);
   
    xmlhttp.send();
    }
    </script>
    <?php
    include('../footer&header/header.php'); ?>

    <div class="forum">
    <div class='question'>
        <h1><?php print_r($_SESSION['question']);?></h1>
        <form class="create-post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='POST'>
        <textarea class="post" name="post" required></textarea>
        <input type="submit" class='fsubmit' name="create" value="POST" focus/>
        </form>



    </div>
    <hr/>
    <div class="comments">
    <?php
    while($row = $result->fetch_assoc()) {
        
        echo "<div class=\"desc\">
        <div class=\"content\">".$row['comments']."<br><br>
        
        <button type=\"submit\" class=\"like\"  onclick=\"likes(this,".$row['comment_id'].")\" name=\"like\" value=".$row['likes']."><i id=".$row['comment_id']." class=\"fa fa-thumbs-o-up\" style=\"font-size:14px\" >".$row['likes']."</i></button>
        <button type=\"submit\" class=\"dislikes\" onclick=\"likes(this,".$row['comment_id'].")\" name=\"dislikes\" value=".$row['dislikes']."><i id=\"d".$row['comment_id']."\" class=\"fa fa-thumbs-o-down\" style=\"font-size:14px\">".$row['dislikes']."</i></button>
        
        </div>
        </div>" ;
      }
    
    ?>
    </div>
    </div>
    <?php 
include('../footer&header/footer.php')
    ?>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <script src="https://cdn.ckeditor.com/4.15.0/basic/ckeditor.js">
</script>
    <script>
        CKEDITOR.replace( 'post' );
    </script>
    
</body>
</html>