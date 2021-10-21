<?php
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
            <form action="save-movie.php" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="mtitle" class="form-control" placeholder="Movie Title" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="mdesc" class="form-control" rows="6" maxlength="300" required></textarea>
                    <!-- <input type="text" name="user" class="form-control" placeholder="Username" required> -->
                </div>
                <div class="form-group">
                    <label>Language</label>
                    <input type="text" name="mlanguage" class="form-control" placeholder="Movie Language" required>
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <select class="form-control" name="country">
                        <?php
                        $a = mysqli_query($conn, "SELECT * FROM countries");
                        while ($row = mysqli_fetch_assoc($a)) {
                            echo "<option value='{$row["id"]}'>" . ucwords($row["country_name"]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Duration</label>
                    <input class="form-control" name="duration" type="text" required pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" value="00:00:00">
                    <small>Write a duration in the format hh:mm:ss</small>
                    <!-- <input type="time" step="0.001"> -->
                    <!-- <input type="time" name="duration" class="form-control" placeholder="Duration" required> -->
                </div>
                <div class="form-group">
                    <label>Release Date</label>
                    <input type="date" name="rel_date" class="form-control" placeholder="release date" required>
                </div>
                <div class="form-group">
                    <label>Genre</label>
                    <select class="form-control" name="genre">
                        <?php
                        $b = mysqli_query($conn, "SELECT * FROM genre");
                        while ($row1 = mysqli_fetch_assoc($b)) {
                            echo "<option value='{$row1["gen_id"]}'>" . ucwords($row1["genre"]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Poster</label>
                    <input type="file" name="postimg" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Trailer Link</label>
                    <input type="text" name="trailer" class="form-control">
                </div>
                <input type="submit" name="save" class="btn btn-primary" value="Save" required />

            </form>
        </div>
    </div>

</div>

<?php
include "footer.php";
?>
