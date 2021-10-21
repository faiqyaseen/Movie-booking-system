<?php
include "config.php";
if (isset($_POST['submit'])) {


    $passid = $_POST['pass_id'];
    $oldpass = md5($_POST['oldpass']);
    $sql = "SELECT * FROM tbl_emp WHERE id = $passid AND password = '$oldpass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $newpass = md5($_POST['newpass']);
        $confirmpass = md5($_POST['confirmpass']);
        if($newpass == $confirmpass){
            $sql1 = "UPDATE tbl_emp SET password='$newpass' WHERE id = $passid";
            if (mysqli_query($conn, $sql1)) {
                header("Location:{$hostname}/Admin/account-setting.php");
            }
        }else{
        echo "<p style='color:red; text-align:center; margin:10px 0;'>Passwords Don't Match</p>";

        }
    } else {
        echo "<p style='color:red; text-align:center; margin:10px 0;'>Old Password Is Incorrect</p>";
        
        
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
                <h1 class="">Change Password</h1>
            </div>
            <?php
            $id = $_GET['id']; ?>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="hidden" name="pass_id" class="form-control" value="<?php echo $id ?>" placeholder="">
                </div>
                <div class="form-group">
                    <label>Old Password</label>
                    <input type="password" name="oldpass" class="form-control" placeholder="Old Password" required>
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="newpass" class="form-control" placeholder="New Password" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmpass" class="form-control" placeholder="Confirm Password" required>
                </div>

                <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
            </form>

        </div>
    </div>

</div>

<?php
include "footer.php";
?>