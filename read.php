<?php
include "./template/header.php";
?>
<?php

$sql ="SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);



?>



<div class="col-sm-12 bg-dark p-3 border"><p class="text-white">All Data</p></div>
<div class="container">
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3  g-4">
<?php if (mysqli_num_rows($result)) { ?>
    <?php while($rows = mysqli_fetch_assoc($result)){ ?>
      <?php
      // echo "<pre>";
      // print_r($rows);
      // echo "<pre>";
      ?> 
      <div class="col">
      <div class="card">
      <img src="./image/<?=$rows["image"];?>" width="250px" class="card-img-top" alt="...">
      <td>
      <div class="card-body">
      <td>
      <a href="./update.php?id=<?=$rows['id']?> "class="btn btn-success ">Update</a>
      <a href="./handlers/delete.php?id=<?=$rows['id']?> "class="btn btn-danger">Dlelte</a>
    </td>
    </div>
    </div> 
    </div> 


  <?php }?>
  <?php }?>
</div> 
</div> 
</div>











<?php
include "./template/footer.php";
?>