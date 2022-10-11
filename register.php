<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <script src="tailwind.js"></script>
  </head>
  <body class="bg-cover" style="background-image: url(bglautt.png) ">
    <h2>Register</h2>
    <center>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="register">
      <label for="">Name</label><br>
      <input class="h-8" type="text" id="name" value=""> <br><br>
      <label for="">Username</label><br>
      <input  class="bg-orange-100 rounded-[5px] -ml-[71px] h-[35px] text-center" type="text" id="username" value=""> <br><br>
      <label for="">Password</label><br>
      <input type="password" id="password" value=""> <br><br>
      <button  type="button" onclick="submitData();">Register</button>
    </form>
    </center>
    <br>
    <a href="login.php">Go To Login</a>
    <?php require 'script.php'; ?>
  </body>
</html>
