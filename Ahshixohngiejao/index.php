<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login</title>
</head>

<body>
  <link href="../css/app.css" rel="stylesheet" id="bootstrap-css">
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="../js/jquery/jquery.js"></script>
  <script src="" charset="utf-8"></script>
  <link rel="stylesheet" href="../css/login.css">
  <link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

  <!-- Include the above in your HEAD tag ---------->

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">

                <h3 style="margin-top:  40px; margin-bottom: 40px;">Login</h3>
      </div>

      <!-- Login Form -->

      <form method="post" action="cek_login.php">
        <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
        <input type="password" id="login" class="fadeIn second" name="password" placeholder="Password">
        <input type="submit" value="Login" class="fadeIn fourth" >
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>

    </div>
  </div>
</body>

</html>
