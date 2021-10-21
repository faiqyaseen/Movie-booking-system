<?php
include "header.php";
include "aside.php";
include "page-wrapper.php";
?>




    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1 class="">Show Seat</h1>
            </div>
            <!-- <div class="col-md-2">
                <a class="btn btn-info" href="add-show.php"><i class="fa fa-plus-circle"></i> Add Show</a>
            </div> -->
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

                $sql = "SELECT * FROM show_seat LEFT JOIN theater_seat ON show_seat.th_seat_id = theater_seat.th_seat_id 
                LEFT JOIN booking ON show_seat.booking_id = booking.booking_id
                LEFT JOIN th_show ON show_seat.show_id = th_show.show_id
                ORDER BY show_seat_id DESC LIMIT {$offset},{$limit}";
                $result = mysqli_query($conn, $sql) or die("query failed");
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <th>S.No.</th>
                            <th>Show id</th>
                            <th>Seat id</th>
                            <th>Booking Id</th>
                            <th>Status</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <?php
                            $serial = $offset + 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class="font-weight-bold"><?php echo $serial; ?></td>
                                    <td><?php echo ucwords($row['show_id']); ?></td>
                                    <td><?php echo ($row['th_seat_id']); ?></td>
                                    <td><?php echo ($row['booking_id']); ?></td>
                                    <td><?php echo ($row['status']); ?></td>
                                    <td><?php echo ($row['price']); ?></td>
                                </tr>
                            <?php
                                $serial++;
                            } ?>
                        </tbody>
                    </table>
                <?php } ?>
                <div class="col-md-4 m-auto mt-5">
                    <?php
                    $sql1 = "SELECT * FROM show_seat";
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
                        echo "<li class='page-item {$prevdisable}'><a class='page-link' href='show-seat.php?page=" . ($page - 1) . "'>Previous</a></li>";
                        for ($i = 1; $i <= $total_pages; $i++) {
                            if ($i == $page) {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                            echo "<li class='page-item $active'><a class='page-link' href='show-seat.php?page=" . $i . "'>" . $i . "</a></li>";
                        }
                        if ($total_pages > $page) {
                            $nextdisable = "";
                        } else {
                            $nextdisable = "disabled";
                        }
                        echo "<li class='page-item {$nextdisable}'><a class='page-link' href='show-seat.php?page=" . ($page + 1) . "'>Next</a></li>";
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