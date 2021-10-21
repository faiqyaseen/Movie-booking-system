<?php

include "header.php";
include "aside.php";
include "page-wrapper.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 m-auto">
            <h1 class="">Movies</h1>
        </div>
        <div class="col-md-12">
            <?php
            include "config.php";
            $sql = "SELECT movie.movie_id, movie.movie_title,
                movie.movie_description,movie.movie_duration, movie.movie_language,
                movie.release_date, genre.genre, countries.country_name
                FROM movie LEFT JOIN 
                genre ON movie.gen_id = genre.gen_id
                LEFT JOIN countries ON movie.country = countries.id
                ORDER BY movie.movie_id DESC LIMIT 4";
            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
            ?>
                <table class="table table-striped text-center">
                    <thead class="thead-dark">
                        <th>Movie Title</th>
                        <th>Genre</th>
                        <th>Country</th>
                        <th>Movie Duration</th>
                        <th>Movie Language</th>
                        <th>Release Date</th>
                        <th>Details</th>
                        <!-- <th>Country</th>
                            <th>Genre</th> -->
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo ucwords($row['movie_title']); ?></td>
                                <td><?php echo ucwords($row['genre']); ?></td>
                                <td><?php echo ucwords($row['country_name']); ?></td>
                                <td><?php echo $row['movie_duration']; ?></td>
                                <td><?php echo ucwords($row['movie_language']); ?></td>
                                <td><?php echo $row['release_date']; ?></td>
                                <td class='edit text-center'><a href='movie-detail.php?id=<?php echo $row['movie_id']; ?>'><i class='fa fa-info-circle'></i></a></td>
                            </tr>
                        <?php

                        } ?>
                    </tbody>
                </table>
            <?php } ?>
            <div class="col-md-6 m-auto mt-5">
                <a href="movies.php" class="btn btn-primary btn-block">All Movies</a>
            </div>
        </div>
    </div>

    <hr>
    <!-- THEATERS  -->
    <div class="row">
        <div class="col-md-3 m-auto">
            <h1 class="">Theaters</h1>
        </div>
        <div class="col-md-12">
            <?php
            include "config.php";

            $sql = "SELECT * FROM theater LEFT JOIN city ON theater.cityid = city.city_id
                ORDER BY th_id DESC LIMIT 4";
            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
            ?>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <th>Theater Name</th>
                        <th>Total Halls</th>
                        <th>City</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo ucwords($row['th_name']); ?></td>
                                <td><?php echo ($row['total_theater_halls']); ?></td>
                                <td><?php echo ($row['city_name']); ?></td>
                            </tr>
                        <?php

                        } ?>
                    </tbody>
                </table>
            <?php } ?>
            <div class="col-md-6 m-auto mt-5">
                <a href="theater.php" class="btn btn-primary btn-block">All Theaters</a>
            </div>
        </div>
    </div>

    <!-- SHOW -->
    <hr>
    <div class="row">
            <div class="col-md-3 m-auto ">
                <h1 class="">Shows</h1>
            </div>
            <div class="col-md-12">
                <?php
                include "config.php";

                $sql = "SELECT * FROM th_show LEFT JOIN theater_hall ON th_show.th_hall_id = theater_hall.th_hall_id 
                LEFT JOIN movie ON th_show.movie_id = movie.movie_id
                ORDER BY show_id DESC LIMIT 4";
                $result = mysqli_query($conn, $sql) or die("query failed");
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <th>Hall</th>
                            <th>Movie</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo ucwords($row['hall_name']); ?></td>
                                    <td><?php echo ($row['movie_title']); ?></td>
                                    <td><?php echo ($row['show_date']); ?></td>
                                    <td><?php echo ($row['show_starttime']); ?></td>
                                    <td><?php echo ($row['show_endtime']); ?></td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                <?php } ?>
                <div class="col-md-6 m-auto mt-5">
                <a href="show.php" class="btn btn-primary btn-block">All Shows</a>
            </div>
            </div>
        </div>
</div>

<?php
include "footer.php";
?>