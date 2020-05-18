<?php
    //This php code get the users selection of rating if user select I LOVE IT or ITS GOOD let the user post a 
    //review on amazon IF NOT request de shipping address.
    // Start the session
    session_start();
    /* $_SESSION["product"]=$_POST['product'];
    $_SESSION["order"]=$_POST['order'];
    $_SESSION["stars"]=$_POST['stars'];
    $_SESSION["review"]=$_POST['review']; */
      //$_SESSION["wronp"]=0;
      //echo $_SESSION["wronp"];
      $_SESSION["user"]=$_POST['user'];
      $_SESSION["password"]=$_POST['password'];
      if (($_SESSION["user"]=='user1' or $_SESSION["user"]=='User1')  and $_SESSION["password"]=='919293nuvana'){
        header("Location: data.php", true, 301);
        $_SESSION["wronp"]="12";
        $_SESSION["password"]=$_POST['password'];
        exit();
       }
        else{
          header("Location: login.php", true, 301);
          $_SESSION["wronp"]="1";
          $_SESSION["password"]=$_POST['password'];
          exit();
          
      }
      ?>