<?php

$post_id = $_GET["id"];

include "config.php";


$query = "DELETE FROM `post` WHERE `post_id`= '{$post_id}'";

mysqli_query($conn, $query);

header("location: http://localhost:82/kj/admin/products.php")


?>