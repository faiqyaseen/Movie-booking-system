<?php
include "config.php";
if (isset($_POST['save'])) {
    if (empty($_FILES['postimg']['name'])) {
        $new_image = $_POST['oldpos'];
    } else {

        // Delete old image
        $sql3 = "SELECT * FROM movie WHERE movie_id = {$_POST['mid']}";
        $result3 = mysqli_query($conn, $sql3);
        $row3 = mysqli_fetch_assoc($result3);
        unlink("movie-gallery/" . $row3['images']);


        // save new image
        $errors = array();

        $pos_name = $_FILES['postimg']['name'];
        $pos_size = $_FILES['postimg']['size'];
        $pos_tmp = $_FILES['postimg']['tmp_name'];
        $pos_type = $_FILES['postimg']['type'];
        $pos_tmp = $_FILES['postimg']['tmp_name'];
        $pos_ext = strtolower(end(explode('.', $pos_name)));

        $posextesions = array("jpeg", "jpg", "png");

        if (in_array($pos_ext, $posextesions) === false) {
            $errors[] = "This extension file is not allowed, please choose a jpg or jpeg or png file";
        }
        if ($pos_size > 2097152) {
            $errors[] = "File must be 2mb or lower.";
        }
        $new_image = time() . "-" . basename($pos_name);
        if (empty($errors) == true) {
            move_uploaded_file($pos_tmp, "movie-gallery/" . $new_image);
        } else {
            print_r($errors);
            die();
        }
    }

    $title = $_POST['mtitle'];
    $desc = $_POST['mdesc'];
    $dur = $_POST['duration'];
    $lang = $_POST['mlanguage'];
    $reldate = $_POST['rel_date'];
    $country = $_POST['country'];
    $genre = $_POST['genre'];
    $trailer = $_POST['trailer'];

    //Query
    $sql5 = "UPDATE movie SET movie_title='{$_POST['mtitle']}', movie_description='{$_POST['mdesc']}',
    movie_duration='{$_POST['duration']}', movie_language='{$_POST['mlanguage']}', release_date='{$_POST['rel_date']}',
    country={$_POST['country']}, gen_id={$_POST['genre']},images='{$new_image}', trailer='{$trailer}' WHERE movie_id = {$_POST['mid']}";

    $result5 = mysqli_query($conn, $sql5);
    if ($result5) {
        header("Location:{$hostname}/admin/movies.php");
    } else {
        echo "Query Failed!";
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
                <h1 class="">Modify Movie Details</h1>
            </div>
            <?php
            include "config.php";
            $movie_id = $_GET['id'];
            $sql = "SELECT * FROM movie WHERE movie_id = {$movie_id}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="hidden" name="mid" class="form-control" value="<?php echo $row['movie_id']; ?>" placeholder="Movie Title">
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="mtitle" class="form-control" value="<?php echo $row['movie_title']; ?>" placeholder="Movie Title" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="mdesc" class="form-control" rows="6" maxlength="300" required><?php echo $row['movie_description']; ?></textarea>
                            <!-- <input type="text" name="user" class="form-control" placeholder="Username" required> -->
                        </div>
                        <div class="form-group">
                            <label>Language</label>
                            <input type="text" name="mlanguage" value="<?php echo $row['movie_language']; ?>" class="form-control" placeholder="Movie Language" required>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <!-- <input type="hidden" name="old_country" class="form-control" value="<?php echo $row['country'] ?>" placeholder=""> -->
                            <select class="form-control" name="country">
                                <?php
                                $a = mysqli_query($conn, "SELECT * FROM countries");
                                while ($row1 = mysqli_fetch_assoc($a)) {
                                    if ($row['country'] == $row1['id']) {
                                        $selected = "selected";
                                    } else {
                                        $selected = "";
                                    }
                                    echo "<option  {$selected} value='{$row1["id"]}'>" . ucwords($row1["country_name"]) . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Duration</label>
                            <input class="form-control" name="duration" type="text" required pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" value="<?php echo $row['movie_duration']; ?>">
                            <small>Write a duration in the format hh:mm:ss</small>
                            <!-- <input type="time" step="0.001"> -->
                            <!-- <input type="time" name="duration" class="form-control" placeholder="Duration" required> -->
                        </div>
                        <div class="form-group">
                            <label>Release Date</label>
                            <input type="date" value="<?php echo $row['release_date']; ?>" name="rel_date" class="form-control" placeholder="release date" required>
                        </div>
                        <div class="form-group">
                            <label>Genre</label>
                            <select class="form-control" name="genre">
                                <?php
                                $b = mysqli_query($conn, "SELECT * FROM genre");
                                while ($row2 = mysqli_fetch_assoc($b)) {
                                    if ($row['gen_id'] == $row2['gen_id']) {
                                        $genselect = "selected";
                                    } else {
                                        $genselect = "";
                                    }
                                    echo "<option {$genselect} value='{$row2["gen_id"]}'>" . ucwords($row2["genre"]) . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Poster</label>
                            <input type="file" name="postimg" class="form-control">
                            <img src="movie-gallery/<?php echo $row['images']; ?>" alt="" height="150">
                            <input type="hidden" value="<?php echo $row['images']; ?>" name="oldpos" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Trailer</label>
                            <input type="text" name="trailer" value="<?php echo $row['trailer']; ?>" class="form-control">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?php echo $row['trailer']; ?>" allowfullscreen></iframe>
                            </div>
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