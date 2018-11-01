<?php
include('globalCon.php');
$id=$_POST['id'];
$name=$_POST['name'];
$lname=$_POST['lname'];
$cont=$_POST['cont'];
$upd="update tbjquery SET name='$name',lname='$lname',cont='$cont' where id='$id'";
mysqli_query($conn,$upd);



 ?>
