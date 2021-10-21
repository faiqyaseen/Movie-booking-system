<?php include "config.php";

$id = $_GET['id'];
$thid = $_GET['thid'];

$sql = "DELETE FROM theater_hall WHERE th_hall_id = {$id};";
$sql .= "UPDATE theater SET total_theater_halls = total_theater_halls - 1  WHERE th_id = {$thid}";

if (mysqli_multi_query($conn, $sql)) {
    header("Location:{$hostname}/Admin/theater-hall.php");
} else {
    echo "<p style='color:red; text-align:center; margin:10px 0;'>Can't Delete </p>";
}
