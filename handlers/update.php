
<?php
include "../core/database.php";


$id=$_GET["id"];


$sql_dalate="SELECT `id`,`image` FROM `users` WHERE `id`='$id' LIMIT 1";
$res=mysqli_query($conn, $sql_dalate);
$row=mysqli_fetch_assoc($res);
// echo "<pre>";
// print_r($row);
// echo "<pre>";
$file= $row['image'];
$des_name=__DIR__."/../image/".$file;

if(file_exists($des_name)) {
    unlink($des_name);
} 
// echo "<pre>";
// print_r($_FILES);
// echo "<pre>";


$file_name= $_FILES['image']['name'];
$file_tmp=$_FILES['image']['tmp_name'];

$ext=pathinfo($file_name);
// echo "<pre>";
// print_r($ext);
// echo "<pre>";
$f_name=$ext["filename"];
$e_name=$ext["extension"];

$new_name= uniqid("",true).".".$e_name;
$des_name=__DIR__."/../image/".$new_name;
move_uploaded_file($file_tmp,$des_name);


$sql_update="UPDATE `users` SET `image`='$new_name' WHERE `id`= $id";
$res=mysqli_query($conn, $sql_update);

header("location:../read.php");

// $row=mysqli_fetch_assoc($res);
// $file= $row['file'];






















// $sql_dalate="SELECT `id`,`file` FROM `users` WHERE `id`='$id' LIMIT 1";
// $res=mysqli_query($conn, $sql_dalate);
// $row=mysqli_fetch_assoc($res);
// $file= $row['file'];



















// $des_name=__DIR__."/../image/".$file;

// if(file_exists($des_name)) {
// 	unlink($des_name);
// } 

// $sql ="DELETE FROM `users` WHERE `id`='$id'";
// $result = mysqli_query($conn, $sql);




// $id=$_GET['id'];
// $sql_update="SELECT `id`,`file` FROM `users` WHERE `id`='$id'";
// $res=mysqli_query($conn, $sql_update);
// $row=mysqli_fetch_assoc($res);
// echo $file= $row['id']."<br>"; //52
// echo $file= $row['file']."<br>"; //618d5dcb9ab310.50146689.jpg



// $sql ="SELECT * FROM `users`";
// $result = mysqli_query($conn, $sql);

// echo $des_name=__DIR__."/../image/";
// echo $new_name= uniqid("",true).".";

// rename($new_name, $ubdate_name);
// "UPDATE `users` SET `file`='$ubdate_name'  WHERE `id`='$id' LIMIT 1";

