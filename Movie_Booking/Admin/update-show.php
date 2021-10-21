<?php
include "config.php";
if (isset($_POST['save'])) {


    $thshowid = $_POST['show_id'];
    $movie = mysqli_real_escape_string($conn, $_POST['movie']);
    $hall = mysqli_real_escape_string($conn, $_POST['hall']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $starttime = mysqli_real_escape_string($conn, $_POST['starttime']);
    $endtime = mysqli_real_escape_string($conn, $_POST['endtime']);


    $sql = "UPDATE th_show SET show_date='$date', show_starttime='$starttime', show_endtime='$endtime',th_hall_id=$hall, movie_id= $movie WHERE show_id = $thshowid";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:{$hostname}/Admin/show.php");
    } else {
        echo "Error";
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
                <h1 class="">Modify Show DetailsS</h1>
            </div>
            <?php
            include "config.php";
            $show_id = $_GET['id'];
            $sql = "SELECT * FROM th_show WHERE show_id = {$show_id}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <input type="hidden" name="show_id" class="form-control" value="<?php echo $row['show_id']; ?>" placeholder="">
                        <div class="form-group">
                            <label>Movie</label>
                            <select class="form-control" name="movie">
                                <?php
                                $b = mysqli_query($conn, "SELECT * FROM movie");
                                while ($row2 = mysqli_fetch_assoc($b)) {
                                    if ($row['movie_id'] == $row2['movie_id']) {
                                        $showselect = "selected";
                                    } else {
                                        $showselect = "";
                                    }
                                    echo "<option {$showselect} value='{$row2["movie_id"]}'>" . ucwords($row2["movie_title"]) . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hall</label>
                            <select class="form-control" name="hall">
                                <?php
                                $b = mysqli_query($conn, "SELECT * FROM theater_hall");
                                while ($row2 = mysqli_fetch_assoc($b)) {
                                    if ($row['th_hall_id'] == $row2['th_hall_id']) {
                                        $showselect = "selected";
                                    } else {
                                        $showselect = "";
                                    }
                                    echo "<option {$showselect} value='{$row2["th_hall_id"]}'>" . ucwords($row2["hall_name"]) . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" value="<?php echo $row['show_date']; ?>" name="date" class="form-control" placeholder="date" required>
                        </div>
                        <div class="form-group">
                            <label>Start Time</label>
                            <input type="time" value="<?php echo $row['show_starttime']; ?>" name="starttime" class="form-control" placeholder="Start time" required>
                        </div>
                        <div class="form-group">
                            <label>End Time</label>
                            <input type="time" value="<?php echo $row['show_endtime']; ?>" name="endtime" class="form-control" placeholder="End time" required>
                        </div>
                        <input type="submit" name="save" class="btn btn-primary" value="Save" required />

                    </form>
            <?php }
            } ?>
        </div>
    </div>

</div>

<?php
include "footer.php";
?>