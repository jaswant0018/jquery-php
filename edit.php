<?php
include('globalCon.php');
        $edt=$_POST['edt'];
        $read="select * from tbjquery where id=$edt";
        $q=mysqli_query($conn,$read);
        while($ar=mysqli_fetch_array($q)){
          $id=$ar[0];
          $name=$ar[1];
          $lname=$ar[2];
          $cont=$ar[3];

        echo "<input type='text' id='uname' value='$name'>
        <input type='text' id='ulname' value='$lname'>
        <input type='text' id='ucont' value='$cont'>
        <input type='button' id='upd' value='update' data-id='$id'>";
}

 ?>
