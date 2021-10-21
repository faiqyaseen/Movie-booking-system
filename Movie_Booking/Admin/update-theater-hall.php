<?php
include "config.php";
if (isset($_POST['submit'])) {


    $thall_id = $_POST['hall_id'];
    $hall = mysqli_real_escape_string($conn, $_POST['hall']);
    $seats = mysqli_real_escape_string($conn, $_POST['seats']);
    $old_th = mysqli_real_escape_string($conn, $_POST['old-theater']);
    $theater = mysqli_real_escape_string($conn, $_POST['theater']);
    $loc = mysqli_real_escape_string($conn, $_POST['loc']);

    if($theater == $old_th){
        $sql = "UPDATE theater_hall SET hall_name='{$hall}', total_seats={$seats}, theaterid= {$theater}, location='{$loc}' WHERE th_hall_id = {$thall_id}";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location:{$hostname}/Admin/theater-hall.php");
        } else {
            echo "Error";
        }
    }else{
        $sql = "UPDATE theater_hall SET hall_name='{$hall}', theaterid= {$theater}, location='{$loc}' WHERE th_hall_id = {$thall_id};";
        $sql .= "UPDATE theater SET total_theater_halls = total_theater_halls - 1 WHERE th_id = {$old_th};";
        $sql .= "UPDATE theater SET total_theater_halls = total_theater_halls + 1 WHERE th_id = {$theater}";
        $result = mysqli_multi_query($conn, $sql);
        if ($result) {
            header("Location:{$hostname}/Admin/theater-hall.php");
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
                <h1 class="">Modify Hall Details</h1>
            </div>
            <?php
            include "config.php";
            $hall_id = $_GET['id'];
            $sql = "SELECT * FROM theater_hall WHERE th_hall_id = {$hall_id}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <input type="hidden" name="hall_id" class="form-control" value="<?php echo $row['th_hall_id']; ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Hall Name</label>
                            <input type="text" name="hall" value="<?php echo $row['hall_name']; ?>" class="form-control" placeholder="Hall Name" required>
                        </div>
                        <!-- <div class="form-group">
                            <label>Total Seats</label>
                            <input type="number" name="seats" value="<?php echo $row['total_seats']; ?>" class="form-control" placeholder="Total Seats" required>
                        </div> -->
                        <div class="form-group">
                            <label>Theater</label>
                            <input type="hidden" name="old-theater" value="<?php echo $row['theaterid']; ?>" class="form-control" placeholder="" required>
                            <select class="form-control" name="theater">
                                <?php
                                $b = mysqli_query($conn, "SELECT * FROM theater");
                                while ($row2 = mysqli_fetch_assoc($b)) {
                                    if ($row['theaterid'] == $row2['th_id']) {
                                        $thselect = "selected";
                                    } else {
                                        $thselect = "";
                                    }
                                    echo "<option {$thselect} value='{$row2["th_id"]}'>" . ucwords($row2["th_name"]) . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="loc" class="form-control" placeholder="Location" value="<?php echo $row['location']; ?>" required>
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