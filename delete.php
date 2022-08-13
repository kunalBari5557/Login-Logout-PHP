
<?php

include 'config_page.php' ;

$id= $_GET['id'];

$query ="DELETE FROM `data6` WHERE id=$id";

mysqli_query($conn,$query);

header("location:login_process_page.php");

?>