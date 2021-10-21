<?php
include "config.php";
if (isset($_POST['submit'])) {


    $theat_id = $_POST['th_id'];
    $th_name = mysqli_real_escape_string($conn, $_POST['th_name']);
    $halls = mysqli_real_escape_string($conn, $_POST['halls']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    $sql = "UPDATE theater SET th_name='{$th_name}', cityid={$city} WHERE th_id = {$theat_id}";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:{$hostname}/Admin/theater.php");
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
                <h1 class="">Modify Theater Details</h1>
            </div>
            <?php
            include "config.php";
            $th_id = $_GET['id'];
            $sql = "SELECT * FROM theater WHERE th_id = {$th_id}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <input type="hidden" name="th_id" class="form-control" value="<?php echo $row['th_id']; ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Theater Name</label>
                            <input type="text" name="th_name" value="<?php echo $row['th_name']; ?>" class="form-control" placeholder="" required>
                        </div>
                        <!-- <div class="form-group">
                            <label>Total Halls</label>
                            <input type="number" name="halls" value="<?php echo $row['total_theater_halls']; ?>" class="form-control" placeholder="" required>
                        </div> -->
                        <div class="form-group">
                            <label>City</label>
                            <select class="form-control" name="city">
                                <?php
                                $b = mysqli_query($conn, "SELECT * FROM city");
                                while ($row2 = mysqli_fetch_assoc($b)) {
                                    if ($row['cityid'] == $row2['city_id']) {
                                        $cityselect = "selected";
                                    } else {
                                        $cityselect = "";
                                    }
                                    echo "<option {$cityselect} value='{$row2["city_id"]}'>" . ucwords($row2["city_name"]) . "</option>";
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