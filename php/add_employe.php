
<?php 








include "../php_lib/connection.php";

 ?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

	<!--link css file -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/add_employe.css">
	<title>Add Employe </title>
	<link rel="favicon icon" href="">


</head>
<body>

<div class="add-wrap">

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "post">

 <h4>Welcome <?php echo isset($_SESSION['username'])?$_SESSION['username']:""; ?></h4> 

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputName4" name="employe_name" placeholder="Enter Name" required>
    </div>


    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="employe_email" placeholder=" Enter Email" required >
    </div>


    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" required>
    </div>


    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" required>
    </div>

    <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
    </div>

     <div class="form-group col-md-6">
      <label for="inputZip">Phone munber</label>
      <input type="number" class="form-control" id="inputZip" name="employe_age" required>
     </div>


    <div class="form-group col-md-5">
      <label for="inputState">Position</label>
      <select id="inputState" class="form-control" name="employe_position" required>
        <option value="0" selected>Manager</option>
        <option value="1">Assi Manager</option>
        <option value="2">Selse Man</option>
      </select>
    </div>


    <div class="form-group col-md-3">
      <label for="inputState">Gender</label>
      <select id="inputState" class="form-control" name="employe_gender" required >
        <option value="0" selected>Male</option>
        <option value="1">Female</option>
      </select>
    </div>


     <div class="form-group col-md-4">
      <label for="inputZip">Age</label>
      <input type="number" class="form-control" id="inputZip" name="employe_age" required>
     </div>


  </div>



  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Sign in</button>

</form>


 <div id="back">
 <input type="button" onclick="location.href='admin_portal.php';" value="Go Back" />

 </div>


</div>





</body>
</html>