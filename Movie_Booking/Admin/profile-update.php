<?php
if (isset($_POST['submit'])) {

    include "config.php";
    $user_id1 = $_POST['user_id'];
    $sql1 = "SELECT * FROM tbl_emp WHERE id = {$user_id1}";
    $result1 = mysqli_query($conn, $sql1) or die("query failed");
    if (mysqli_num_rows($result1) > 0) {
        while ($row1 = mysqli_fetch_assoc($result1)) {

            // Delete old image
            unlink("upload/" . $row1['image']);
        }
    }

    // save new image
    $errors = array();

    $file_name = $_FILES['new_profile']['name'];
    $file_size = $_FILES['new_profile']['size'];
    $file_tmp = $_FILES['new_profile']['tmp_name'];
    $file_type = $_FILES['new_profile']['type'];
    $file_tmp = $_FILES['new_profile']['tmp_name'];
    $file_ext = strtolower(end(explode('.', $file_name)));

    $extesions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extesions) === false) {
        $errors[] = "This extension file is not allowed, please choose a jpg or jpeg or png file";
    }
    if ($file_size > 2097152) {
        $errors[] = "File must be 2mb or lower.";
    }
    $new_image = time() . "-" . basename($file_name);
    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "upload/" . $new_image);
    } else {
        print_r($errors);
        die();
    }
    $sql2 = "UPDATE tbl_emp SET image='{$new_image}' WHERE id = {$user_id1}";

    $result2 = mysqli_query($conn,$sql2);
    if($result2){
        header("Location:{$hostname}/Admin/profile.php?id={$user_id1}");
    }
    else{
        echo "Query Failed!";
    }
}
include "header.php";
include "aside.php";
include "page-wrapper.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 m-auto">
            <?php
            include "config.php";
            $user_id = $_GET['id'];
            $sql = "SELECT * FROM tbl_emp WHERE id = {$user_id}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-md-12">
                        <h1 class=""><?php echo "Update " . ucfirst($row['first_name']) . "'s Profile Image"; ?></h1>
                    </div>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="user_id" class="form-control" value="<?php echo $row['id']; ?>" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="">Select Profile Picture</label><br>
                            <?php
                            if (!empty($row['image'])) {
                                echo "<img class='mt-2' src='upload/{$row["image"]}' width='150px' height='150px'><br>";
                            }
                            ?>
                            <input class="mt-2" type="file" name="new_profile" required>
                        </div>

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