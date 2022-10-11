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
    <title class="" >Login</title>
    <script src="tailwind.js"></script>
  </head>
  <body class="bg-cover" style="background-image: url(bglautt.png) "  >
    <h2 class="text-4xl font-bold text-white  ml-7 mt-4">Login</h2>
    
    <center>
    <form class="m-auto"  autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login"><br><br><br><br><br><br><br><br><br>
      <label class="w-6 -ml-[71px]" for="">Username</label><br>
      <input   class="bg-orange-100 rounded-[5px] -ml-[71px] h-[35px] text-center " type="text" id="username" value=""> <br><br>
      <label class="w-6 -ml-[71px]" for="">Password</label><br>
      <input class=" -ml-[71px] rounded-[5px] h-[35px] text-center" type="password" id="password" value=""> <br><br><br>
      <button class="bg-orange-100 w-6 -ml-[91px]" type="button" onclick="submitData();">Login</button>
    </form>
    </center>
    
    <br>
    <a  class="text-sm font-medium text-slate-700 ml-[690px] mt-[920px] " href="register.php">Go To Register</a>
    <?php require 'script.php'; ?>
  </body>
</html>
