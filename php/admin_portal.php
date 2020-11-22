<?php 

//login protal start------------
session_start();
if (isset($_SESSION['auth'])) {
    if ($_SESSION['auth'] != 1) {
        header("location:login_admin.php");
     }
 }
else{
  if (isset($_COOKIE['auther'])) {
    if ($_COOKIE['auther'] != true) {
       header("location:login_admin.php");
     }
  }
  else{
    header("location:login_admin.php");
   }

}

include "../php_lib/connection.php";

//login protal end------------

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!--link css file -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet"  href="../css/admin_portal.css">
    
    <link rel="favicon icon" href="">
    <title>Login Protal</title>

  </head>



  

<body>
<div class="bg-image">

<br><br>
<div class="login-wrap">
   <div class="login-html">
          <div class="header">
           <p>Welcome <?php echo isset($_SESSION['username'])?$_SESSION['username']:""; ?></p>
        </div>
                <div class="group">
                     <a href="list_employe.php"><input type="submit" class="button" name="list_empolye" value="SEE EMPLOYE LIST"></a>
                  </div>

                <div class="group">
                   <a href="add_employe.php"><input type="submit" class="button" name="add_employe" value="ADD Employee"></a> 
                </div>

                  <div class="group">
                     <a href="list_product"><input type="submit" class="button" name="list_product" value="PRODUCT LIST"></a>
                </div>

                <div id="logout">
                    <a href="logout.php">Logout</a>
                </div>
      
            </div>

              
      
  </div>
</div>



















    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</div>
   
  </body>
</html>