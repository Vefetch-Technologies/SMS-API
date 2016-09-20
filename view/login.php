<!DOCTYPE html>
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
    <img src="../img/login-w-icon.png">
    </img>
  </div>
  <div id="container">
    <h1>Log In</h1>
    <span class="close-btn">
      <img src="../img/circle_close_delete_-128.png"></img>
    </span>

    <form action="../controller/login_controller.php" method="post">
      <input type="email" name="email" placeholder="E-mail" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Log in">
    </form>
  </div>


</body>
</html>