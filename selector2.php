<?php
    session_start();
      $_SESSION["user"]=$_POST['user'];
      $_SESSION["password"]=$_POST['password'];
      if (($_SESSION["user"]=='user1' or $_SESSION["user"]=='User1')  and $_SESSION["password"]=='919293nuvana'){
        $_SESSION["access"]="granted";
        header("Location: data.php", true, 301);
        exit();
       }
        else{
          $_SESSION['message'] = "<h6 class='text-center' style='margin-top:10px;color: darkred'>Wrong password or user</h6>";
          header("Location: login2.php", true, 301);
          exit();
          
      }
      ?>