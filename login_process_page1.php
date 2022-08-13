<?php
  session_start();
  include('config_page.php');
?>


<?php
if (isset($_POST['sublogin'])){

 $login = $_POST['login_var'];
$password = $_POST['password'];
$query = "select * from data6 where email ='$login' &&  password = '$password' ";
  $data = mysqli_query($conn,$query);
  $result = mysqli_num_rows($data);

  if ($result==1){
     $row = mysqli_fetch_assoc($data);
    
    $_SESSION['login_var']=$login;

    header('location:login_process_page.php');


  }
  else{ 
     header("location:login_page.php?loginerror=".$login);
        }
    }
    else{
  header("location:login_page.php?loginerror=".$login);
    }


?>