<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="admin.css?v=<?php echo time(); ?>" type="text/css" />
        <script type="text/javascript" src="admin.js?v=<?php echo time();?>"></script>

    </head>
    <body>
    <div class="top-nav" style="background-color: #008080; color: white; padding:20px; ">
            ADMIN
        </div>
     <div class="flex">   
    <div class="sidebar">
  <a class="tablinks" onclick="openCity(event, 'addmovie')" id="defaultOpen" href="#">Add Movie</a>
  <a class="tablinks" onclick="openCity(event, 'addshow')" href="#">Add TV Show</a>
  <a class="tablinks" onclick="openCity(event, 'addquiz')" href="#">Create Quiz</a>
       </div>


<!-- ADD MOVIE -->

<div id="addmovie" class="tabcontent">
    <br>
<div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name of the movie</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Movie's name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Director</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Director's Name">
      </div>

    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Genre</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Action/Thriller</option>
          <option value="canada">Horror</option>
          <option value="usa">Comedy</option>
          <option value="usa">Sci-Fi</option>
          <option value="usa">Award Winning</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Description</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Rating</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">5 star</option>
          <option value="canada">4 star</option>
          <option value="usa">3 star</option>
          <option value="usa">2 star</option>
          <option value="usa">1 star</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Runtime</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Runtime">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</div>



<!-- ADD TV SHOW -->
        
<div id="addshow" class="tabcontent">
    <br>
<div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name of the TV Show</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Show's name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Director</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Director's Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Genre</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Action/Thriller</option>
          <option value="canada">Horror</option>
          <option value="usa">Comedy</option>
          <option value="usa">Sci-Fi</option>
          <option value="usa">Award Winning</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Description</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:300px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Rating</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">5 star</option>
          <option value="canada">4 star</option>
          <option value="usa">3 star</option>
          <option value="usa">2 star</option>
          <option value="usa">1 star</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Number of seasons</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Number of seasons..">
      </div>
      
      
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Number of episodes per season</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Number of episodes..">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</div>



<!-- CREATE QUIZ -->

<div id="addquiz" class="tabcontent">
    <br>
<div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Question 1..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 1 Option 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 1">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 1 Option 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 2">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 1 Option 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 3">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 1 Option 4</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 4">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-25">
        <label for="lname">Question 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Question 2..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 2 Option 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 1..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 2 Option 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 2..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 2 Option 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 3..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 2 Option 4</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 4..">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-25">
        <label for="lname">Question 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Question 3..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 3 Option 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 1..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 3 Option 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 2..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 3 Option 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 3..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Question 3 Option 4</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Option 4..">
      </div>
    </div>
    
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</div>
</div>

<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
        
        <script src="" async defer></script>
    </body>
</html>