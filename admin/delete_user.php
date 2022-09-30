<?php

$user_id = $_GET["id"];

include "config.php";


$query = "DELETE FROM `user` WHERE `user_id`= '{$user_id}'";

mysqli_query($conn, $query);

header("location:http://localhost:82/kj/admin/users.php");


?>