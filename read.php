
   <?php
   include('globalCon.php');
$read="select * from tbjquery";
$q=mysqli_query($conn,$read);

while($arr=mysqli_fetch_array($q)){
$id=$arr[0];
  $name=$arr[1];
  $lname=$arr[2];
  $cont=$arr[3];

  echo "<tr><td>$name</td><td>$lname</td><td>$cont</td><td><button id='del' class='btn btn-danger' data-id='$id'>delete</button><button id='edt' class='btn btn-success' data-id='$id'>edit</button></td></tr>";

} ?>
