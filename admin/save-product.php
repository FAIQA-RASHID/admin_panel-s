<?php

if(isset($_POST["submit"])){
include "config.php";


if(isset($_FILES["fileToUpload"]))
{


    $error=array();

    $file_name=$_FILES["fileToUpload"]["name"];
    $file_temp=$_FILES["fileToUpload"]["tmp_name"];
    $file_size=$_FILES["fileToUpload"]["size"];
    $file_type=$_FILES["fileToUpload"]["type"];
    $file_ext=explode('.',$file_name);
    $file_ext=end($file_ext);
    $file_ext=strtolower($file_ext);
    $extension=array("jpg","jpeg","png");
     
if(in_array($file_ext,$extension)===false)
{
    $error[]="file extension must be in jpeg,jpg,png";

}
if($file_size > 2097152)
{
    $error[]="file size must be less than 2 mb";
}
if(empty($error)== true)
{
    move_uploaded_file($file_temp,"upload/".$file_name);
}
else
{
    print_r($error);
    die();
}
}
$title=$_POST["products_title"];
$discription=$_POST["productsdesc"];
$category=$_POST["category"];
$date= date("d - M -Y");
session_start();
$author =$_SESSION["user_id"];

$query ="INSERT INTO `post`( `title`, `description`, `category`, `post_date`, `author`, `post_img`) 
VALUES ('$title','$discription','$category','$date','$author ','$file_name')";


mysqli_query($conn,$query);
}

header("location: http://localhost:82/kj/admin/products.php")
?>
