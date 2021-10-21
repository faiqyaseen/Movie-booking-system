<?php
include "config.php";
if (isset($_POST['submit'])) {


    $hseatid = $_POST['seat_id'];
    $seat = mysqli_real_escape_string($conn, $_POST['seat']);
    $hall = mysqli_real_escape_string($conn, $_POST['hall']);
    $old_hall = mysqli_real_escape_string($conn, $_POST['old-hall']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);

    if($hall == $old_hall){
        $sql = "UPDATE theater_seat SET seat_number={$seat}, type='{$type}', theater_hall_id= {$hall} WHERE th_seat_id = {$hseatid}";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location:{$hostname}/Admin/theater-hall.php");
        } else {
            echo "Error";
        }
    }else{
        $sql = "UPDATE theater_seat SET seat_number={$seat}, type='{$type}', theater_hall_id= {$hall} WHERE th_seat_id = {$hseatid};";
        $sql .= "UPDATE theater_hall SET total_seats = total_seats - 1 WHERE th_hall_id = {$old_hall};";
        $sql .= "UPDATE theater_hall SET total_seats = total_seats + 1 WHERE th_hall_id = {$hall};";
        $result = mysqli_multi_query($conn, $sql);
        if ($result) {
            header("Location:{$hostname}/Admin/theater-seat.php");
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
                <h1 class="">Modify Seat Details</h1>
            </div>
            <?php
            include "config.php";
            $seat_id = $_GET['id'];
            $sql = "SELECT * FROM theater_seat WHERE th_seat_id = {$seat_id}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <input type="hidden" name="seat_id" class="form-control" value="<?php echo $row['th_seat_id']; ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Seat Number</label>
                            <input type="number" name="seat" value="<?php echo $row['seat_number']; ?>" class="form-control" placeholder="Hall Name" required>
                        </div>
                        <div class="form-group">
                            <label>Seat Type</label>
                            <input type="text" name="type" value="<?php echo $row['type']; ?>" class="form-control" placeholder="Hall Name" required>
                        </div>
                        <div class="form-group">
                            <label>Hall</label>
                            <input type="hidden" name="old-hall" value="<?php echo $row['theater_hall_id']; ?>" class="form-control" placeholder="" required>
                            <select class="form-control" name="hall">
                                <?php
                                $b = mysqli_query($conn, "SELECT * FROM theater_hall");
                                while ($row2 = mysqli_fetch_assoc($b)) {
                                    if ($row['theater_hall_id'] == $row2['th_hall_id']) {
                                        $thselect = "selected";
                                    } else {
                                        $thselect = "";
                                    }
                                    echo "<option {$thselect} value='{$row2["th_hall_id"]}'>" . ucwords($row2["hall_name"]) . "</option>";
                                }
                                ?>
                            </select>
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