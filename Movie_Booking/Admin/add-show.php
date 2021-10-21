<?php

include "config.php";

if (isset($_POST['save'])) {

    $movie = $_POST['movie'];
    $hall = $_POST['hall'];
    $date = $_POST['date'];
    $stime = $_POST['starttime'];
    $etime = $_POST['endtime'];


    $sql = "INSERT INTO th_show(show_date, show_starttime, show_endtime, th_hall_id, movie_id)
    VALUES ('$date','$stime','$etime',$hall,$movie)";
    if (mysqli_query($conn, $sql)) {
        header("Location:{$hostname}/Admin/show.php");
    }
}


include "header.php";
include "aside.php";
include "page-wrapper.php";
?>

<div class="container-fluid">
    <div class="row">
        <!-- <div class="col-md-12">
            <h1 class="">Add Movie</h1>
        </div> -->
        <div class="col-md-6 m-auto">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label>Movie</label>
                    <select class="form-control" name="movie">
                        <?php
                        $a = mysqli_query($conn, "SELECT * FROM movie");
                        while ($row = mysqli_fetch_assoc($a)) {
                            echo "<option value='{$row["movie_id"]}'>" . ucwords($row["movie_title"]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Hall</label>
                    <select class="form-control" name="hall">
                        <?php
                        $a = mysqli_query($conn, "SELECT * FROM theater_hall");
                        while ($row = mysqli_fetch_assoc($a)) {
                            echo "<option value='{$row["th_hall_id"]}'>" . ucwords($row["hall_name"]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control" placeholder="date" required>
                </div>
                <div class="form-group">
                    <label>Start Time</label>
                    <input type="time" name="starttime" class="form-control" placeholder="Start time" required>
                </div>
                <div class="form-group">
                    <label>End Time</label>
                    <input type="time" name="endtime" class="form-control" placeholder="End time" required>
                </div>
                <input type="submit" name="save" class="btn btn-primary" value="Save" required />

            </form>
        </div>
    </div>

</div>

<?php
include "footer.php";
?>