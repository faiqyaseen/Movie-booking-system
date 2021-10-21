<?php
include "header.php";
include "aside.php";
include "page-wrapper.php";
?>




    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1 class="">All Shows</h1>
            </div>
            <div class="col-md-2">
                <a class="btn btn-info" href="add-show.php"><i class="fa fa-plus-circle"></i> Add Show</a>
            </div>
            <div class="col-md-12">
                <?php
                include "config.php";

                $limit = 3;

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $offset = ($page - 1) * $limit;

                $sql = "SELECT * FROM th_show LEFT JOIN theater_hall ON th_show.th_hall_id = theater_hall.th_hall_id 
                LEFT JOIN movie ON th_show.movie_id = movie.movie_id
                ORDER BY show_id DESC LIMIT {$offset},{$limit}";
                $result = mysqli_query($conn, $sql) or die("query failed");
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <th>S.No.</th>
                            <th>Hall</th>
                            <th>Movie</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php
                            $serial = $offset + 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class="font-weight-bold"><?php echo $serial; ?></td>
                                    <td><?php echo ucwords($row['hall_name']); ?></td>
                                    <td><?php echo ($row['movie_title']); ?></td>
                                    <td><?php echo ($row['show_date']); ?></td>
                                    <td><?php echo ($row['show_starttime']); ?></td>
                                    <td><?php echo ($row['show_endtime']); ?></td>
                                    <td class='edit'><a href='update-show.php?id=<?php echo $row['show_id']; ?>'><i class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href='delete-show.php?id=<?php echo $row['show_id']; ?>'><i class='fa fa-trash'></i></a></td>
                                </tr>
                            <?php
                                $serial++;
                            } ?>
                        </tbody>
                    </table>
                <?php } ?>
                <div class="col-md-4 m-auto mt-5">
                    <?php
                    $sql1 = "SELECT * FROM th_show";
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
                        echo "<li class='page-item {$prevdisable}'><a class='page-link' href='show.php?page=" . ($page - 1) . "'>Previous</a></li>";
                        for ($i = 1; $i <= $total_pages; $i++) {
                            if ($i == $page) {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                            echo "<li class='page-item $active'><a class='page-link' href='show.php?page=" . $i . "'>" . $i . "</a></li>";
                        }
                        if ($total_pages > $page) {
                            $nextdisable = "";
                        } else {
                            $nextdisable = "disabled";
                        }
                        echo "<li class='page-item {$nextdisable}'><a class='page-link' href='show.php?page=" . ($page + 1) . "'>Next</a></li>";
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