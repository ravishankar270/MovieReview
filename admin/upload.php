<?php
        include('../connectdb.php');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['submit']) ){
                  $movie_name=$conn-> real_escape_string(strip_tags($_POST['Name']));
                  $director=$conn -> real_escape_string(strip_tags($_POST['Director']));
                  $genre=$conn -> real_escape_string($_POST['genre']);
                  $description=$conn -> real_escape_string(strip_tags($_POST['description']));
                  $Rating=$_POST['rating'];
                  $season=intval($_POST['season']);
                  $episodes=intval($_POST['episode']);
                  

                 $a= array( );

                  $upload=0;
                  $dir="../TVShow_images/" .$movie_name;
                  if(!file_exists($dir)){
                     mkdir($dir, 0755, true);
                  }
                  for($i=0; $i<count($_FILES["image"]["name"]); $i++)
                  {


                  $fileData = pathinfo(basename($_FILES["image"]["name"][$i]));
                  $fileName = $fileData['filename']. '.' . $fileData['extension'];
                    $check = getimagesize($_FILES["image"]["tmp_name"][$i]);
                    if($check !== false) {
                      $upload = 1;
                    } else {
                      $error='File is not an image';
                      $upload = 0;
                      break;
                    }
                    $target_file=$dir."/".$fileName;

                    if (file_exists($target_file)) {
                      $error="Sorry, file already exists.";
                      $upload = 0;
                      break;
                    }

                   

                  if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file))
                  {
                    array_push($a,$target_file);



                  }
                  else
                  {
                   echo "<script>alert('There was an error uploading the file {$_FILES['image']['name'][$i]}, please try again!')</script><br />";
                  }
              } // clo
                 
                //   $UploadedFileName=$_FILES['image']['name'];
                //   $UploadedFileName1=$_FILES['image1']['name'];
                //   $UploadedFileName2=$_FILES['image2']['name'];
                //   $UploadedFileName3=$_FILES['image3']['name'];
                //   $check = getimagesize($_FILES["image"]["tmp_name"]);
                //   $check1 = getimagesize($_FILES["image1"]["tmp_name"]);
                //   $check2 = getimagesize($_FILES["image2"]["tmp_name"]);
                //   $check3 = getimagesize($_FILES["image3"]["tmp_name"]);
                //     if($check !== false && $check1 !== false && $check2 !== false && $check3 !== false) {
                //       if($UploadedFileName!='' && $UploadedFileName1!='' & $UploadedFileName2!='' && $UploadedFileName3!='')
                // {
                //   $upload_directory = "../Movies_images/".$movie_name."/"; //This is the folder which you created just now
                //   $TargetPath=time().$UploadedFileName;
                //   $TargetPath1=time().$UploadedFileName1;
                //   $TargetPath2=time().$UploadedFileName2;
                //   $TargetPath3=time().$UploadedFileName3;
                //   print_r($_FILES);
                //   if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$TargetPath)){ 
                //   if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$TargetPath1)){  
                //   if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$TargetPath2)){   
                //   if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$TargetPath3)){ 
                if($upload==1){
                    $sql="INSERT INTO `entertainment` ( `Director`,`Name`,`genre`,`images`,`images1`,`images2`,`images3`,`rating`,`description`,`admin_id`,`Type`) VALUES ( '$director','$movie_name','$genre','".$a[0]."','".$a[1]."','".$a[2]."','".$a[3]."',$Rating,'$description',0,'TVShow')";

                  $result = $conn->query($sql) or die($conn->error);
                  $sql2="select E_id from entertainment where Name=$movie_name";
                  $result1 = $conn->query($sql2) or die($conn->error);
                  if($result1){
                  $row=$result1->fetch_row();

                

                  $sql1="INSERT INTO `tv_shows` ( `no_of_seasons`,`no_of_episodes`,`E_id`) VALUES ( $season,$episodes,".$row[0].")";
                  $result2 = $conn->query($sql1) or die($conn->error);

                    if($result and $result2){
                      echo "Updated";

                    }else{
                      echo "No";
                    }
                    unset($_POST);
                    }
                    else {
                      echo "not ok";
                    }
                  }
                //     // Write Mysql Query Here to insert this $QueryInsertFile   .                   
                //   }
                //   }
                //   }
                //   }
                // }

                //     } else {
                //       echo "File is not an image.";
                //       $uploadOk = 0;
                //     }
                  }  
                    
    }
 


    
    
    // Check connection
        
        
        
    
        
        $conn->close();

?>