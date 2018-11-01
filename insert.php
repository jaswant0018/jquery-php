<?php
include('globalCon.php');
 $name=$_POST['name'];
$lname=$_POST['lname'];
 $cont=$_POST['cont'];

  $sql="insert into tbjquery(name,lname,cont) values('$name','$lname','$cont')";
  mysqli_query($conn,$sql);

?>
