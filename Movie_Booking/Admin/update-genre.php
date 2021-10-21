<?php
include "config.php";
if (isset($_POST['submit'])) {


    $genid = $_POST['gen_id'];
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);

    $sql = "UPDATE genre SET genre='{$genre}' WHERE gen_id = {$genid}";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:{$hostname}/Admin/genre.php");
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
                <h1 class="">Modify Genre</h1>
            </div>
            <?php
            include "config.php";
            $gen_id = $_GET['id'];
            $sql = "SELECT * FROM genre WHERE gen_id = {$gen_id}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <input type="hidden" name="gen_id" class="form-control" value="<?php echo $row['gen_id']; ?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" name="genre" value="<?php echo $row['genre']; ?>" class="form-control" placeholder="" required>
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