<?php

include "config.php";

if (isset($_POST['save'])) {

    $hall = mysqli_real_escape_string($conn, $_POST['hall']);
    // $seat = mysqli_real_escape_string($conn, $_POST['seats']);
    $theater = mysqli_real_escape_string($conn, $_POST['theater']);
    $location = mysqli_real_escape_string($conn, $_POST['loc']);


    $sql2 = "SELECT * FROM theater_hall WHERE hall_name = '{$hall}' AND theaterid = $theater";
    $result2 = mysqli_query($conn, $sql2) or die("Query Failed");

    if (mysqli_num_rows($result2) > 0) {
        echo "<p style='color:red; text-align:center; margin:10px 0;'> Hall already exists </p>";
    } else {
        $sql1 = "INSERT INTO theater_hall(hall_name,theaterid,location) VALUES ('$hall',$theater,'$location');";
        $sql1 .= "UPDATE theater SET total_theater_halls = total_theater_halls + 1 WHERE th_id = $theater";
        if (mysqli_multi_query($conn, $sql1)) {
            header("Location:{$hostname}/Admin/theater-hall.php");
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
            <h1 class="">Add Theater Hall</h1>
        </div>
        <div class="col-md-6 m-auto">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label>Hall Name</label>
                    <input type="text" name="hall" class="form-control" placeholder="Hall Name" required>
                </div>
                <!-- <div class="form-group">
                    <label>Total Seats</label>
                    <input type="number" name="seats" class="form-control" placeholder="Total Seats" required>
                </div> -->
                <div class="form-group">
                    <label>Theater</label>
                    <select class="form-control" name="theater">
                        <?php
                        $b = mysqli_query($conn, "SELECT * FROM theater");
                        while ($row1 = mysqli_fetch_assoc($b)) {
                            echo "<option value='{$row1["th_id"]}'>" . ucwords($row1["th_name"]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="loc" class="form-control" placeholder="Location" required>
                </div>
                <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                
            </form>
        </div>
    </div>

</div>

<?php
include "footer.php";
?>