<?php

$category_id = $_GET["id"];

include "config.php";


$query = "DELETE FROM `category` WHERE `category_id`= '{$category_id}'";

mysqli_query($conn, $query);

header("location:http://localhost:82/kj/admin/category.php")


?>