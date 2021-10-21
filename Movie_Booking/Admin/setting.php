<?php
include "header.php";
include "aside.php";
include "page-wrapper.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="admin-heading">Settings</h1>
        </div>
        <div class="col-md-offset-3 col-md-6 m-auto">
            <!-- Form for show edit-->
            <?php
            include "config.php";
            $sql = "SELECT * FROM settings";

            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <form action="save-setting.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group">
                            <input type="hidden" name="set_id" class="form-control" value="<?php echo $row['id'] ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputTile">Website Name</label>
                            <input type="text" name="website_name" class="form-control" id="exampleInputUsername" value="<?php echo $row['websitename'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Icon</label>
                            <input type="file" name="new_icon"><br>
                            <img class="mt-2" src="images/<?php echo $row['icon'] ?>" height="50px">
                            <input type="hidden" name="old_icon" value="<?php echo $row['icon'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Logo</label>
                            <input type="file" name="new_logo"><br>
                            <img class="mt-2" src="images/<?php echo $row['logo'] ?>" height="150px">
                            <input type="hidden" name="old_logo" value="<?php echo $row['logo'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Footer Description</label>
                            <textarea name="footerdesc" class="form-control" required rows="5"><?php echo $row['footer'] ?>
                                </textarea>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Update Setting" />
                    </form>
                    <!-- Form End -->
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>