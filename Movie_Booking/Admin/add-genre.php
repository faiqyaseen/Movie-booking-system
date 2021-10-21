<?php

include "config.php";

if (isset($_POST['save'])) {

    $genre = mysqli_real_escape_string($conn, $_POST['gen']);


    $sql = "SELECT genre FROM genre WHERE genre = '{$genre}'";
    $result = mysqli_query($conn, $sql) or die("Query Failed");

    if (mysqli_num_rows($result) > 0) {
        echo "<p style='color:red; text-align:center; margin:10px 0;'> Genre already exists </p>";
    } else {
        $sql1 = "INSERT INTO genre(genre) VALUES ('$genre')";
        if (mysqli_query($conn, $sql1)) {
            header("Location:{$hostname}/Admin/genre.php");
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
            <h1 class="">Add Category</h1>
        </div>
        <div class="col-md-6 m-auto">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label>Genre</label>
                    <input type="text" name="gen" class="form-control" placeholder="Genre" required>
                </div>
                <input type="submit" name="save" class="btn btn-primary" value="Save" required />

            </form>
        </div>
    </div>

</div>

<?php
include "footer.php";
?>