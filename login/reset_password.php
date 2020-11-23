</html>

<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="forgot.css" type="text/css" />
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Recover Password</title>
</head>

<body>


<div class="box">
        <form class='form' action="reset.php" method="post" >
            <h1>Recover Your Account</h1>
            <!-- <div class="input1">
                <input type="email" id="email" name="email" autocomplete="off" required />
                <label for="email" class="label-email">
                    <span class="content-email">Email</span>
                </label>
            </div> -->
            <div class="input1">
                <input type="email" id="email" name="email" autocomplete="off" required />
                <label for="email" class="label-email">
                    <span class="content-email">Email</span>
                </label>
            </div>
            <div class="input1">
                <input type="password" id="password" name="password" autocomplete="off" required />
                <label for="password" class="label-email">
                    <span class="content-email">Password</span>
                </label>
            </div>
            <div class="input1">
                <input type="password" id="repassword" name="repassword" autocomplete="off" required />
                <label for="password" class="label-email">
                    <span class="content-email">Re-Enter Password</span>
                </label>
            </div>
            <!-- <div id='submit'></div> -->
            <input type="submit" id="submit" name="submit" value="Send Mail" />
            </form>
        </div>
</body>
</html>