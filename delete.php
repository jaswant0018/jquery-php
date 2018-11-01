 <?php
 include('globalCon.php');
  $del=$_POST['del'];
  $dqry="delete from tbjquery where id=$del";
  mysqli_query($conn,$dqry);
  ?>
