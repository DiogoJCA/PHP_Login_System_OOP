<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <?php
            if (isset($_SESSION["userid"])) {
            ?>
            <li><a><?php echo $_SESSION["useruid"];?></a></li>
            <li><a href="includes/logount.inc.php">LOGOUT</a></li>
            <?php } else {
            ?>
            <li><a href="#">SIGN UP</a></li>
            <li><a href="#">LOGIN</a></li>
            <?php }
            ?>
        </ul>
    </nav>
  <section class="index-login">
    <div class="wrapper">
      <div class="index-login-signup">
        <h4>SIGN UP</h4>
        <p>Don't have an account yet? Sign up here!</p>
        <form action="includes/signup.inc.php" method="POST">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwdrepeat" placeholder="Repeat Password">
          <input type="text" name="email" id="E-mail">
          <br>
          <button type="submit" name="submit">SIGN UP</button>
        </form>
      </div>
      <div class="index-login-login">
        <h4>LOGIN</h4>
        <p>Don't have an account yet? Sign up here!</p>
        <form action="includes/login.inc.php" method="POST">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <br>
          <button type="submit" name="submit">LOGIN</button>
        </form>
      </div>
    </div>
  </section>  

</body>
</html>