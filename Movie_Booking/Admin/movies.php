<?php
include "header.php";
include "aside.php";
include "page-wrapper.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <h1 class="">All Movies</h1>
        </div>
        <div class="col-md-2">
            <a class="btn btn-info" href="add-movie.php"><i class="fa fa-plus-circle"></i> Add Movies</a>
        </div>
        <div class="col-md-12">
            <?php
            include "config.php";

            $limit = 10;

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $offset = ($page - 1) * $limit;

            $sql = "SELECT movie.movie_id, movie.movie_title,
                movie.movie_description,movie.movie_duration, movie.movie_language,
                movie.release_date, genre.genre, countries.country_name
                FROM movie LEFT JOIN 
                genre ON movie.gen_id = genre.gen_id
                LEFT JOIN countries ON movie.country = countries.id
                ORDER BY movie.movie_id DESC LIMIT {$offset},{$limit}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            if (mysqli_num_rows($result) > 0) {
            ?>
                <table class="table table-striped text-center">
                    <thead class="thead-dark">
                        <th>S.No.</th>
                        <th>Movie Title</th>
                        <!-- <th>Movie Description</th> -->
                        <th>Genre</th>
                        <th>Country</th>
                        <th>Movie Duration</th>
                        <th>Movie Language</th>
                        <th>Release Date</th>
                        <th>Details</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <!-- <th>Country</th>
                            <th>Genre</th> -->
                    </thead>
                    <tbody>
                        <?php
                        $serial = $offset + 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td class="font-weight-bold"><?php echo $serial; ?></td>
                                <td><?php echo ucwords($row['movie_title']); ?></td>
                                <!-- <td><?php //echo $row['movie_description']; 
                                            ?></td> -->
                                <td><?php echo ucwords($row['genre']); ?></td>
                                <td><?php echo ucwords($row['country_name']); ?></td>
                                <td><?php echo $row['movie_duration']; ?></td>
                                <td><?php echo ucwords($row['movie_language']); ?></td>
                                <td><?php echo $row['release_date']; ?></td>
                                <td class='edit text-center'><a href='movie-detail.php?id=<?php echo $row['movie_id']; ?>'><i class='fa fa-info-circle'></i></a></td>
                                <td class='edit'><a href='update-movie.php?id=<?php echo $row['movie_id']; ?>'><i class='fa fa-edit'></i></a></td>
                                <td class='delete'><a href='delete-movie.php?id=<?php echo $row['movie_id']; ?>'><i class='fa fa-trash'></i></a></td>
                            </tr>
                        <?php
                            $serial++;
                        } ?>
                    </tbody>
                </table>
            <?php } ?>
            <div class="col-md-4 m-auto mt-5">
                <?php
                $sql1 = "SELECT * FROM movie";
                $result1 = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result1) > 0) {
                    $total_records = mysqli_num_rows($result1);

                    $total_pages = ceil($total_records / $limit);
                    echo "<nav aria-label='...'>
                                <ul class='pagination'>";
                    if ($page > 1) {
                        $prevdisable = "";
                    } else {
                        $prevdisable = "disabled";
                    }
                    echo "<li class='page-item {$prevdisable}'><a class='page-link' href='movies.php?page=" . ($page - 1) . "'>Previous</a></li>";
                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == $page) {
                            $active = "active";
                        } else {
                            $active = "";
                        }
                        echo "<li class='page-item $active'><a class='page-link' href='movies.php?page=" . $i . "'>" . $i . "</a></li>";
                    }
                    if ($total_pages > $page) {
                        $nextdisable = "";
                    } else {
                        $nextdisable = "disabled";
                    }
                    echo "<li class='page-item {$nextdisable}'><a class='page-link' href='movies.php?page=" . ($page + 1) . "'>Next</a></li>";
                    echo "</ul>
                            </nav>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>