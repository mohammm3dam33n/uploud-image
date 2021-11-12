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

$sql ="DELETE FROM `users` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);

header("location:../read.php");

?>