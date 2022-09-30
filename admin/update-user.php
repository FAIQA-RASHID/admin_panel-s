<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Modify User Details</h1>
            </div>
            <div class="col-md-offset-4 col-md-4">
                <!-- Form Start -->
                <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="user_id" class="form-control" value="1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="f_name" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="l_name" value="" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>User Role</label>
                        <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                            <option value="0">normal User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                </form>
                <!-- /Form -->

                <?php

                if (isset($_POST["submit"])) {

                    // echo "<pre>";

                    // print_r($_POST);


                    $user_id = $_POST["user_id"];
                    $user_fname = $_POST["f_name"];
                    $user_lname = $_POST["l_name"];
                    $user_name = $_POST["username"];
                    $user_role = $_POST["role"];

                    //   echo $user_id;
                    //   die();

                    include "config.php";


                    $query = "UPDATE `user` SET `first_name`='{$user_fname}',`last_name`='{$user_lname}',`username`='{$user_name}',`role`='{$user_role}' WHERE `user_id` = '{$user_id}' ";

                    mysqli_query($conn, $query);

                    header("location:http://localhost:82/kj/admin/users.php");
                }


                ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>