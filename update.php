<?php
 include 'config_page.php';

  if(isset($_POST['done'])){

  $id = $_GET['id'];
 $username = $_POST['username'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $dob = $_POST['dob'];
 $password = $_POST['password'];
 $cpassword = $_POST['cpassword'];
 $q = " update data6 set id=$id, username='$username', lastname='$lastname', email='$email', address='$address', dob= '$dob' 
      password='$password', cpassword ='$cpassword ' where id=$id  ";

  mysqli_query($conn,$q);

  header('location:login_process_page.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

  <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label> LastName: </label>
 <input type="text" name="lastname" class="form-control"> <br>

 <label> Email: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> Address: </label>
 <input type="text" name="address" class="form-control"> <br>

 <label> DOB: </label>
 <input type="text" name="dob" class="form-control"> <br>

  <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>

  <label> Confirm Password: </label>
 <input type="text" name="cpassword" class="form-control"> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>