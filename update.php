<?php
include "./template/header.php";


$id=$_GET["id"];
$sql_update="SELECT `id`,`image` FROM `users` WHERE `id`='$id'";
$res=mysqli_query($conn, $sql_update);
$row=mysqli_fetch_assoc($res);
// echo "<pre>";
// print_r($row);
// echo "<pre>";
$row['id'];
$row['image'];

// $des_name=__DIR__."/../image/".$file;

?>
<div class="col-sm-12 bg-dark p-3 border " style="margin-bottom: 150px;"><p class="text-white ">update</p></div>

<div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 col-xl-6 mx-auto">
                <form action="./handlers/update.php?id=<?=$id?> " method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                        <input type="submit" name="submit" class="form-control btn btn-primary btn-lg" value="send">
                </div>
                </form>
            </div>
        </div>
</div>







<?php
include "./template/footer.php";
?>