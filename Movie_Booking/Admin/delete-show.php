<?php include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM th_show WHERE show_id = {$id};";

if (mysqli_query($conn, $sql)) {
    header("Location:{$hostname}/Admin/show.php");
} else {
    echo "<p style='color:red; text-align:center; margin:10px 0;'>Can't Delete </p>";
}
