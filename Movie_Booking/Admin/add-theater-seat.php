<?php

include "config.php";

if (isset($_POST['save'])) {

    $seat = mysqli_real_escape_string($conn, $_POST['seat']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $hall = mysqli_real_escape_string($conn, $_POST['hall']);


    $sql2 = "SELECT * FROM theater_seat WHERE seat_number = {$seat} AND theater_hall_id = {$hall}";
    $result2 = mysqli_query($conn, $sql2) or die("Query Failed");

    if (mysqli_num_rows($result2) > 0) {
        echo "<p style='color:red; text-align:center; margin:10px 0;'> Seat already exists </p>";
    } else {
        $sql1 = "INSERT INTO theater_seat(seat_number,type,theater_hall_id) VALUES ($seat,'$type',$hall);";
        $sql1 .= "UPDATE theater_hall SET total_seats = total_seats + 1 WHERE th_hall_id = $hall";
        if (mysqli_multi_query($conn, $sql1)) {
            header("Location:{$hostname}/Admin/theater-seat.php");
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
            <h1 class="">Add Theater Seat</h1>
        </div>
        <div class="col-md-6 m-auto">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label>Seat Number</label>
                    <input type="number" name="seat" class="form-control" placeholder="Seat Number" required>
                </div>
                <select class="form-control" name="type">
                        <?php
                        $b = mysqli_query($conn, "SELECT * FROM seat_type");
                        while ($row1 = mysqli_fetch_assoc($b)) {
                            echo "<option value='{$row1["type_id"]}'>" . ucwords($row1["type"]) . "</option>";
                        }
                        ?>
                    </select>
                <div class="form-group">
                    <label>Theater Hall</label>
                    <select class="form-control" name="hall">
                        <?php
                        $b = mysqli_query($conn, "SELECT * FROM theater_hall");
                        while ($row1 = mysqli_fetch_assoc($b)) {
                            echo "<option value='{$row1["th_hall_id"]}'>" . ucwords($row1["hall_name"]) . "</option>";
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