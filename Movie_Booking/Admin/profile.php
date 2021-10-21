<?php
include "header.php";
include "aside.php";
include "page-wrapper.php";
?>




<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class=""></h1>
            <hr />
        </div>
        <?php
        include "config.php";
        $user_id = $_GET['id'];
        $sql = "SELECT * FROM tbl_emp WHERE id = {$user_id}";
        $result = mysqli_query($conn, $sql) or die("query failed");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-10">
                <h1 class=""><?php echo ucfirst($row['first_name']) . " " . ucfirst($row["last_name"]) . "" ?></h1>
            </div>
            <div class="col-md-2">
                <a class="btn btn-info" href="account-setting.php"><i class="fa fa-"></i> Edit Profile</a>
            </div>
                <div class="col-md-12 text-center">

                    <h1></h1>
                    <hr />
                    <dl class="dl-horizontal">
                        <?php
                        if (!empty($row['image'])) {
                            echo "<dt>
                                <h3>Profile Picture</h3>
                            </dt>
    
                            <dd>
                                <img src='upload/{$row['image']}' height='150' width='150' class='rounded-circle'/> <br>
                                <a class='btn btn-info mt-1 mb-5' href='profile-update.php?id={$row['id']}'>Update profile Picture</a>
                            </dd>";
                        } else {
                            echo "<h4>Profile Pic Not Setted!<h4> <a href='profile-update.php?id={$row['id']}'>Want to update profile Pic?</a>";
                        }
                        ?>
                        <dt>
                            <h3>First Name</h3>
                        </dt>

                        <dd>
                            <h4><?php echo $row['first_name']; ?></h4>
                        </dd>


                        <dt>
                        <h3>Last Name</h3>
                        </dt>

                        <dd>
                        <h4><?php echo $row['last_name']; ?></h4>
                        </dd>

                        <dt>
                        <h3>Username</h3>
                        </dt>

                        <dd>
                            <h4><?php echo $row['username']; ?></h4>
                        </dd>

                        <dt>
                        <h3>Date Of Birth</h3>
                        </dt>

                        <dd>
                        <h4><?php echo $row['dob']; ?></h4>
                        </dd>


                    </dl>
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