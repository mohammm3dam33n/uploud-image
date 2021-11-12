<?php
include "../core/database.php";
$error=[];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// echo "<pre>";
// print_r($_FILES["image"]);
// echo "</pre>";


foreach($_FILES["image"]["tmp_name"] as $key =>$value){


    $file = $_FILES['image'];
    $file_name = $file["name"][$key];
    $file_type = $file["type"][$key];
    $file_tmp = $file["tmp_name"][$key];
    $file_eror = $file["error"][$key];
    $file_size = $file["size"][$key];


    $ext=pathinfo($file_name);
    // echo "<pre>";
    // print_r($ext);
    // echo "</pre>";

    $f_name=$ext["filename"];
    $e_name=$ext["extension"];


    $new_name= uniqid("",true).".".$e_name;
    $des_name=__DIR__."/../image/".$new_name;

    // echo "<pre>";
    // print_r( $des_name);
    // echo "</pre>";
    move_uploaded_file($file_tmp,$des_name); 

    // echo "<pre>";
    // print_r($new_name);
    // echo "<pre>";

    $sql="INSERT INTO `users`(`image`) VALUES ('$new_name')";
    $result=mysqli_query($conn,$sql);

    header("location:../read.php");
}

}
// $file = $_FILES['image'];
// $file_name = $file["name"];
// $file_type = $file["type"];
// $file_tmp = $file["tmp_name"];
// $file_eror = $file["error"];
// $file_size = $file["size"];


// $alow=["png","jpg","jpeg","pdf"];

//     if($file_name!=""){
//     if($file_eror==0){


// if($file_size<50000){

//     $ext=pathinfo($file_name);

//     $f_name=$ext["filename"];
//     $e_name=$ext["extension"];

//     if(in_array($e_name,$alow)){

//         $new_name= uniqid("",true).".".$e_name;
//         $des_name=__DIR__."/../image/".$new_name;
//         // echo $des_name;
//         // move_uploaded_file($file_tmp,$des_name);



//         // $sql = "INSERT INTO `users`(`file`) VALUES ('$new_name')";
//         // $result = mysqli_query($conn, $sql);
//         // // echo $sql;

//         // header("location:../read.php");
//     }else{
//         $error[]="extension not Alow";

//     }
// }else{
//     $error[]="this file < 5bit";

// }

//     }else{
//         $error[]="this erorrrrrr";
//     }


//     }else{
//     $error[]="please choues your file";
//     }
// }


// if(!empty($error)){
//     foreach($error as $value){
//         echo $value."<br>";
//     }
// }



