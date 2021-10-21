<?php
include "config.php";
if (isset($_POST['submit'])) {
    if (isset($_POST['role'])) {

        $id = $_POST['user_id'];
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $dob = $_POST['dob'];
        
        $role = $_POST['role'];

        $sql = "UPDATE tbl_emp SET first_name='{$fname}',last_name='{$lname}',username='{$user}',dob='{$dob}',role = {$role} WHERE id = {$id}";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location:{$hostname}/Admin/emp.php");
        } else {
            echo "Error";
        }
    } else {
        $id = $_POST['user_id'];
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $dob = $_POST['dob'];
        // $password = mysqli_real_escape_string($conn,md5($_POST['password']));
        // $role = mysqli_real_escape_string($conn, $_POST['role']);

        $sql = "UPDATE tbl_emp SET first_name='{$fname}',last_name='{$lname}',username='{$user}',dob='{$dob}' WHERE id = {$id}";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location:{$hostname}/Admin/account-setting.php");
        } else {
            echo "Error";
        }
    }
}
include "header.php";
include "aside.php";
include "page-wrapper.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="col-md-10">
                <h1 class="">Modify User Details</h1>
            </div>
            <?php
            include "config.php";
            $user_id = $_GET['id'];
            $sql = "SELECT * FROM tbl_emp WHERE id = {$user_id}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <input type="hidden" name="user_id" class="form-control" value="<?php echo $row['id']; ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" value="<?php echo $row['first_name']; ?>" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname" value="<?php echo $row['last_name']; ?>" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="user" value="<?php echo $row['username']; ?>" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="date" name="dob" class="form-control" value="<?php echo $row['dob']; ?>" placeholder="" required>
                        </div>
                        <?php
                        if ($_SESSION["emp_role"] == 1) {
                        ?>
                            <div class="form-group">
                                <label>User Role</label>
                                <select class="form-control" name="role">
                                    <?php
                                    if ($row['role'] == 1) {
                                        echo "<option  value='0'>normal User</option>
                                    <option selected value='1'>Admin</option>";
                                    } else {
                                        echo "<option selected value='0'>normal User</option>
                                    <option value='1'>Admin</option>";
                                    }
                                    ?>

                                </select>
                            </div>
                        <?php
                        }
                        ?>
                        <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                    </form>
            <?php }
            } ?>
        </div>
    </div>

</div>

<?php
include "footer.php";
?>