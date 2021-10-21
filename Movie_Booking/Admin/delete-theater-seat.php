<?php include "config.php";

$id = $_GET['id'];
$hallid = $_GET['hallid'];

$sql = "DELETE FROM theater_seat WHERE th_seat_id = {$id};";
$sql .= "UPDATE theater_hall SET total_seats = total_seats - 1  WHERE th_hall_id = {$hallid}";

if (mysqli_multi_query($conn, $sql)) {
    header("Location:{$hostname}/Admin/theater-seat.php");
} else {
    echo "<p style='color:red; text-align:center; margin:10px 0;'>Can't Delete </p>";
}
