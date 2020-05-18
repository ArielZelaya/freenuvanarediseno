<!DOCTYPE html>
<?php
session_start();
//if ($_SESSION["wronp"]==1){
//    $message = "wrong answer";
//    echo "<script type='text/javascript'>alert('$message');</script>";
//}else{

   // $_SESSION["wronp"]=0;
//    echo $_SESSION["wronp"];

//}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="src/img/neur-02.jpg"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nuvana Nutrition</title>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;800&display=swap" rel="stylesheet"> 
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Sticky Header Section -->
    <div class="container-fluid" style="background-color: #4D738A; height: 35px;">
      <div class="container">
        <p class="text-center mont" style="color:#FFF; font-size: 13px; margin-top: 9px;">GET FREE SHIPPING ON NUVANA PRODUCTS FOR A LIMITED TIME. USE FREESHIPPING ON CHECKOUT</p>
      </div>
    </div>

    <!-- Main Header Section -->
    <div class="container-fluid bg-pattern" style="padding-bottom: 50px;">
      <div class="container text-center">
        <h1 class="text-center sanscondensed" style="font-weight: 700; font-size: 60px; padding-top: 40px; margin-bottom: -5px;">Login to check registered orders</h1>

        <img src="src/img/group.png" style="width: 350px; padding-top: 10px;">
       <!--  <p class="text-center sans" style="margin-bottom: 0px;">
          Tell us what you think and we’ll send you a free bottle. No strings attached!
        </p>
        <p class="text-center sans">
          *Limit one free bottle per household. We only ship to addresses in the US. Offer valid while supplies last.
        </p> -->
      </div>
    </div>

    <!-- Form Section -->
    <div class="container">
    <div class="row">
  <div class="col-md-6 col-md-offset-3">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="selector2.php" method="POST">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="user" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
            <?php
            //session_start();
            //$_SESSION["wronp"]=1;
            if (empty($_SESSION["password"])){
                //echo"Correcto";
                //echo $_SESSION["wronp"];
                //$_SESSION["wronp"]=1; 
                $_SESSION["wronp"]=0;
                    //echo "last try";
                    //echo $_SESSION["wronp"];
                    //echo "Varible de sesison";
                    //echo $_POST['password'];
                
            }elseif($_SESSION["password"]!="919293nuvana"){
                   echo "<h3 class='text-center' style='color: darkred'>Wrong password or user</h3>";
            }else{
                //echo "else";
                $_SESSION["wronp"]=0;
                echo $_SESSION["wronp"];

            }
            ?>
        </div>
         <div class="clearfix">
            <!-- <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a> -->
        </div>        
    </form>
    <!-- <p class="text-center"><a href="#">Create an Account</a></p> -->
</div>
  </div>
        <!-- FORM END -->
  
</div>
</div>


    <!-- FOOTER -->
    <?php	include('src/includes/footer.php');?>
    <!-- END FOOTER -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="src/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <!-- <script src="src/js/masking.js"></script> -->
  </body>
</html>