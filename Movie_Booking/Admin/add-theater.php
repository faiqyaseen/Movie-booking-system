<?php

include "config.php";

if (isset($_POST['save'])) {

    $th_name = mysqli_real_escape_string($conn, $_POST['th_name']);
    // $halls = mysqli_real_escape_string($conn, $_POST['halls']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);


    $sql = "SELECT th_name FROM theater WHERE th_name = '{$th_name}'";
    $result = mysqli_query($conn, $sql) or die("Query Failed");

    if (mysqli_num_rows($result) > 0) {
        echo "<p style='color:red; text-align:center; margin:10px 0;'> Theater already exists </p>";
    } else {
        $sql1 = "INSERT INTO theater(th_name,cityid) VALUES ('$th_name',$city)";
        if (mysqli_query($conn, $sql1)) {
            header("Location:{$hostname}/Admin/theater.php");
        }
    }
}




include "header.php";
include "aside.php";
include "page-wrapper.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="">Add Theater</h1>
        </div>
        <div class="col-md-6 m-auto">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label>Theater Name</label>
                    <input type="text" name="th_name" class="form-control" placeholder="Theater Name" required>
                </div>
                <!-- <div class="form-group">
                    <label>Total Halls</label>
                    <input type="number" name="halls" class="form-control" placeholder="Total Halls" required>
                </div> -->
                <div class="form-group">
                    <label>City</label>
                    <select class="form-control" name="city">
                        <?php
                        $b = mysqli_query($conn, "SELECT * FROM city");
                        while ($row1 = mysqli_fetch_assoc($b)) {
                            echo "<option value='{$row1["city_id"]}'>" . ucwords($row1["city_name"]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <input type="submit" name="save" class="btn btn-primary" value="Save" required />

            </form>
        </div>
    </div>

</div>

<?php
include "footer.php";
?>