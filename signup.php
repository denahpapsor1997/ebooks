<?php
	$title = "User SignUp";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" style="width: 50%;margin-left: auto;margin-right: auto;display: block;padding: 30px;" method="post" action="user_signup.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Firstname</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Firstname" name="firstname">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Lastname</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Lastname" name="lastname">
    </div>
    <div class="form-group">
      <label for="inputEmail4">Email</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="Email" name="email">
        </div>
        <div class="form-group">
      <label for="mobile">Mobile</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="0700565127" name="mobile">
        </div>
        <div class="form-group">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
    </div>
      <div class="form-group">
        <label for="inputPassword5">Confirm Password</label>
        <input type="password" class="form-control" id="confirmpassword" placeholder="confirm password" name="cpassword">
    </div>
    </div>

    <div class="form-group col-md-12">
    <button type="submit" class="btn btn-primary" style="width: 40%;
    margin-left: auto;margin-right: auto;display: block;">Create Account</button>
    </div>
</form>
<div style="position:fixed; bottom:120px">

<?php
    $fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullurl,"signup=empty")==true){
        echo '<P style="color:red">You did not fill in all the fields.</P>';
        exit();
    }
    if(strpos($fullurl,"signup=invalidemail")==true){
        echo '<P style="color:red">You did not enter a valid email address.</P>';
        exit();
    }
?>
</div>
<?php
	require_once "./template/footer.php";
?>