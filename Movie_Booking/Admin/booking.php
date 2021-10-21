<?php
include "header.php";
include "aside.php";
include "page-wrapper.php";
?>




    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-md-10">
                <h1 class="">Feedbacks</h1>
            </div> -->
            <!-- <div class="col-md-2">
                <a class="btn btn-info" href="add-user.php"><i class="fa fa-user-plus"></i> Add User</a>
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

                $sql = "SELECT * FROM booking LEFT JOIN 
                user ON booking.user_id = user.user_id
                LEFT JOIN th_show ON booking.show_id = th_show.show_id
                ORDER BY booking.booking_id DESC LIMIT {$offset},{$limit}";
                $result = mysqli_query($conn, $sql) or die("query failed");
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Show Date</th>
                            <th>Start time</th>
                            <th>End Time</th>
                            <th>No. of seats</th>
                            <th>Booking Time</th>
                            <!-- <th>Edit</th> -->
                            <!-- <th>Delete</th> -->
                        </thead>
                        <tbody>
                            <?php
                            $serial = $offset + 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class="font-weight-bold"><?php echo $serial; ?></td>
                                    <td><?php echo $row['user_name']; ?></td>
                                    <td><?php echo $row['user_email']; ?></td>
                                    <td><?php echo $row['show_date']; ?></td>
                                    <td><?php echo $row['show_starttime']; ?></td>
                                    <td><?php echo $row['show_endtime']; ?></td>
                                    <td><?php echo $row['number_of_seats']; ?></td>
                                    <td><?php echo $row['timestamp']; ?></td>
                                    <!-- <td class='edit'><a href='update-emp.php?id=<?php //echo $row['id']; ?>'><i class='fa fa-edit'></i></a></td> -->
                                    <!-- <td class='delete'><a href='delete-emp.php?id=<?php //echo $row['id']; ?>'><i class='fa fa-trash'></i></a></td> -->
                                </tr>
                            <?php
                                $serial++;
                            } ?>
                        </tbody>
                    </table>
                <?php } ?>
                <div class="col-md-4 m-auto mt-5">
                    <?php
                    $sql1 = "SELECT * FROM booking";
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
                        echo "<li class='page-item {$prevdisable}'><a class='page-link' href='booking.php?page=" . ($page - 1) . "'>Previous</a></li>";
                        for ($i = 1; $i <= $total_pages; $i++) {
                            if ($i == $page) {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                            echo "<li class='page-item $active'><a class='page-link' href='booking.php?page=" . $i . "'>" . $i . "</a></li>";
                        }
                        if ($total_pages > $page) {
                            $nextdisable = "";
                        } else {
                            $nextdisable = "disabled";
                        }
                        echo "<li class='page-item {$nextdisable}'><a class='page-link' href='booking.php?page=" . ($page + 1) . "'>Next</a></li>";
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