
<?php

include 'config_page.php' ;

$id= $_GET['id'];

$query ="DELETE FROM `data` WHERE id=$id";

mysqli_query($conn,$query);

header("location:display.php");

?>