<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="../MovieDetails/moviereview.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- <?php 
        // include('../footer&header/header.php');
        ?> -->


    <?php
    if(!isset($_SESSION['id'])){
        header('location: ../login/login.php');
    }
    include('../connectdb.php');
    // Try connecting to the Database
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else {
        $sql="SELECT * from user where user_id=".$_SESSION['id'];
        $result = $conn->query($sql) or die($conn->error);
        
        if($result->num_rows==1)
        {
            while($row = $result->fetch_assoc())
            {
            ?>
        <div class="container">
            <div class="profile-header"> 
                <div class="profile-img">
                    <img src="<?php echo 'data:image;base64,'.base64_encode($row['image']); ?>" width="200" alt="image">
                </div>
        <div class="profile-nav-info"> 
                <h3 class="user-name"><?php echo $row['username']; ?></h3>
            <div class="address"> 
            <p class="state">Mumbai,</p>
            <span class="country">India.</span>
            </div>
        </div>
        <br>
        <div class="profile-option"> 
            <div class="notification">
                <i class="fa fa-bell"></i>
                <span class="alert-message">1</span>
                    
            </div>
        </div>
    </div> 
        </div>
            <div class="main-bd">
                <div class="left-side">
                    <div class="profile-side"> 
                    <!-- <p class="user-id"><i
                        class="fa fa-id-card">
                    </i>User ID: <?php echo $row['user_id'];?> </p>  -->
                        <p class="mobile-no">
                            <i class="fa fa-phone"> 

                            </i></p>
                    <p class="user-mail"><i
                        class="fa fa-envelope">
                    </i><?php echo $row['Email_id']; ?> </p> 
                
                <div class="user-bio"> 
                    <h1>BIO</h1>
                    <p class="bio"><?php echo $row['bio'] ?></p>
                </div>
                <div class="profile-btn"> 
                <button class="chatbtn">
                    <i class="fa fa-comment"></i> Chat
                </button>
                <button onclick="window.location.href='../profile/updateform.php' " class="createbtn">
                    <i class="fa fa-refresh"></i>Update
                </button>
                
                </div>
                <div class="user-rating">
                <h3 class="rating">4.5</h3> 
                        <div class="rate">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                        <i class="fa fa-star-half-o"></i>
                        </div>
                    
                        
             </div>
             
            </div>

            </div>

            </div>

        <div class="right-side">
            <div class="vertical">

            <div class="nav">
                <ul>
                <li onclick="showPanel(0,'#25aae1')" class="user-post ">YOUR REVIEWS</li>
                <li onclick="showPanel(1,'#25aae1')" class="user-review">FAN THEORY</li>
                <li onclick="showPanel(2,'#25aae1')" class="user-setting">UPDATE PROFILE</li>
                </ul>
            </div>
            </div>
       

      

            <div class="tabPanel">
                <div class="profile-body">
                    <div class="profile-poststab">
                    <div class="rev-section">

<div class="reviews">

<div class="review">
   
   <div class="body-review">
   <div class="name-review">Parasite</div>

      <div class="rating">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-half-o"></i>
      </div>
      <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
   </div>
</div>
<div class="review">
   
   <div class="body-review">
   <div class="name-review">Avenger</div>

      <div class="rating">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
      </div>
      <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
   </div>
</div>
<div class="review">
  
   <div class="body-review">
      <div class="name-review">Joker</div>
      <div class="rating">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-half-o"></i>
      </div>
      <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
   </div>
</div>

</div>

</div>
                    </div>
            </div>
            </div>
            <div class="tabPanel">
                <div class="profile-body">
                    <div class="profile-poststab">
                    <div class="cardf">
                        <h2><?php echo $row['Email_id']; ?></h2>
                        <div class="containerf">
                        <h4><b>John Doe</b></h4> 
                        <p>Architect & Engineer</p> 
                        </div>
                    </div>
                    </div>
            </div>
            </div>
            <div class="tabPanel">
                <div class="profile-body">
                    <div class="profile-poststab">
                    <button onclick="window.location.href='../profile/updateform.php' " class="createbtn">
                    <i class="fa fa-refresh"></i>Update
                </button>

                    </div>
            </div>
            </div>

</div>
</div>

</div>

</div>
    <?php   
}
}
else{
    echo "error";
}
}
?>
<script src="tab.js"></script>



</body>
</html>