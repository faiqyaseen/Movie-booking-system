<?php include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM genre WHERE gen_id = {$id}";

if (mysqli_query($conn, $sql)) {
    header("Location:{$hostname}/Admin/genre.php");
} else {
    echo "<p style='color:red; text-align:center; margin:10px 0;'>Can't Delete </p>";
}
