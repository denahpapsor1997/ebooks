<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">  
      <title>Stylish Login Page</title>  
      <!-- Latest compiled and minified CSS -->  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">  
      <!-- Optional theme -->  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">  
      <!-- Normalize -->  
      <link rel="stylesheet" href="normalize.css">  
      <!-- Latest compiled and minified JavaScript -->  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
      <!-- Latest compiled and minified jquery 1.11.3 JavaScript -->  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
      <style type="text/css">  
         @import url(http://fonts.googleapis.com/css?family=Raleway:600);  
         body {  
             background-color: #000;  
             margin: 0;  
             padding: 0;  
             height: 100%;  
             width: 100%;  
         }  
         span {  
             color: #fff;  
             font-family: 'Raleway', sans-serif;  
             font-size: 18px;  
         }  
         p {  
             color: #fff;  
             font-family: 'Raleway', sans-serif;  
             font-size: 12px;  
         }  
         .col-centered {  
             float: none;  
             margin: 0 auto;  
             margin-top: 250px;  
         }  
         .wrath-content-box {  
             padding: 15px;  
         }  
         </style>  
         </head>  
         <body >  
         <div class="container-fluid">  
           <div class="row">  
             <div class="col-lg-4 col-centered table-bordered ">  
               <div class="wrath-content-box"> <span>Sign In</span> </div>  
               <div class="wrath-content-box">  
                 <div class="input-group"> <span class="input-group-addon btn-primary" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>  
                   <input type="text" class="form-control" placeholder="Username" />  
                 </div>  
                 <div class="clearfix"></div>  
                 <br />  
                 <div class="input-group"> <span class="input-group-addon btn-primary"" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span> </span>  
                   <input type="password" class="form-control" placeholder="Password" />  
                 </div>  
                 <div class="clearfix"></div>  
                 <br />  
          
                 <div class="col-sm-6 text-right">  
           
                     <div class="form-group text-right">  
                       <input type="submit" class="btn btn-success btn-sm form-control" value="Sign In" />  
                    
                     </div>  
  
                 </div>  
                  <div class="col-sm-6 text-right">  
           
                     <div class="form-group text-right">  
                       <input type="submit" class="btn btn-danger btn-sm form-control" value="cancel" />  
                    
                     </div>  
  
                 </div>  
              <div class="clearfix"></div>  
            </div>  
          </div>  
        </div>  
      </div> 
<div style="position:fixed; bottom:400px">
<?php
    $fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullurl,"signin=empty")==true){
        echo '<P style="color:red">You did not fill in all the fields.</P>';
        exit();
    }
    if(strpos($fullurl,"signin=invalidusername")==true){
        echo '<P style="color:red">Username Does not exist.</P>';
        exit();
    }
    if(strpos($fullurl,"signin=invalidpassword")==true){
        echo '<P style="color:red">Password is not correct.</P>';
        exit();
    }
?>
</div>	  
   </body>  
</html>  