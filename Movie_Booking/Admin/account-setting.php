<?php
// if (isset($_POST['submit'])) {
//     include "config.php";

//     $id = $_POST['user_id'];
//     $fname = mysqli_real_escape_string($conn, $_POST['fname']);
//     $lname = mysqli_real_escape_string($conn, $_POST['lname']);
//     $user = mysqli_real_escape_string($conn, $_POST['user']);
//     $dob = $_POST['dob'];
//     // $password = mysqli_real_escape_string($conn,md5($_POST['password']));
//     $role = mysqli_real_escape_string($conn, $_POST['role']);

//     $sql = "UPDATE tbl_emp SET first_name='{$fname}',last_name='{$lname}',username='{$user}',dob='{$dob}',role='{$role}' WHERE id = {$id}";
//     $result = mysqli_query($conn, $sql);
//     if ($result) {
//         header("Location:{$hostname}/Admin/users.php");
//     } else {
//         echo "Error";
//     }
// }
include "header.php";
include "aside.php";
include "page-wrapper.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 m-auto">
            <!-- <div class="col-md-10">
                <h1 class="">Account Setting</h1>
            </div> -->
            <hr>
            <div class="col-md-12">
                <div class="list-group ">
                    <a href="update-emp.php?id=<?php echo $_SESSION["emp_id"];?>" class="list-group-item list-group-item-action bg-info text-white">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Personal Information</h5>
                            <!-- <small>3 days ago</small> -->
                        </div>
                        <p class="mb-1">Update your name, username, date of birth</p>
                        <!-- <small>And some small print.</small> -->
                    </a>
                    <a href="change-pass.php?id=<?php echo $_SESSION["emp_id"];?>" class="list-group-item mt-2 list-group-item-action bg-info text-white">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Security And Login</h5>
                            <!-- <small class="text-muted">3 days ago</small> -->
                        </div>
                        <p class="mb-1">Change your password</p>
                        <!-- <small class="text-muted">And some muted small print.</small> -->
                    </a>
                    <!-- <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-muted">And some muted small print.</small>
                    </a> -->
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include "footer.php";
?>