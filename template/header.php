<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require_once "./functions/database_functions.php";
    if(isset($_SESSION['email'])){
      $customer = getCustomerIdbyEmail($_SESSION['email']);
      $name=$customer['firstname'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./bootstrap/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">

    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top"  >
      <div class="container">
        <div id="navbar" class="navbar-collapse collapse"> 

          <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp; Home</a></li>
              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
			 
              <li><a href="category_list.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Categories</a></li>
      
              <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publishers</a></li>
		
			  <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp; Contact us</a></li>
		
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
			  
              <?php 
               if(isset($_SESSION['user'])){
                 echo ' <li><a href="logout.php"><span class="	glyphicon glyphicon-log-out"></span>&nbsp; LogOut</a></li>'.'<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;'
                 .$name.
                 '</a></li>';
               }else{
                echo ' <li><a href="signin.php"><span class="	glyphicon glyphicon-log-in"></span>&nbsp; Signin</a></li>'.'<li><a href="signup.php"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Sign up</a></li>';
               }

              ?>
              
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="  background: url('https://www.econlib.org/wp-content/uploads/2018/02/LF-books-background.png') no-repeat center center;background-size: cover;height:400px
;
  " >
      <div class="container">
        <h1 style="text-align:center; margin:5% auto;">LAIKIPIA E-BOOKS</h1>   
        <p style="text-align:center; margin:5% auto;color: red;">find your favourite books all in one!</p>     
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">