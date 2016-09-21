
<html>
<head>
  <title>Login</title>
  <script src="../js/jquery-2.2.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  <script src="../js/login.js"></script>
</head>
  <body>
    <div id="login-button">
    <img src="../img/login-w-icon.png"></img>
    </div>
    <div id="container">
      <h1>Log In</h1>
      <span class="close-btn">
        <img src="../img/circle_close_delete_-128.png"></img>
      </span>

      <form action = "../controller/login_controller.php" method="post">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Password">
        <?php 
          if( isset($_GET['status'])){
            if($_GET['status'] == "false"){
              echo ' <div style="color:white;text-align:center;">Wrong Password.</div>';
            }
          }
        ?>
        <input type="submit" value="login">
      </form>
    </div>
  </body>
</html>