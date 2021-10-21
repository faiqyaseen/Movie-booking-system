<?php include "config.php";

$id = $_GET['id'];


$sql = "SELECT * FROM tbl_emp WHERE id = {$id}";
$result = mysqli_query($conn, $sql) or die("query failed");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['image'] != null) {
            unlink("upload/" . $row['image']);
        }
    }
}


$sql1 = "DELETE FROM tbl_emp WHERE id = {$id}";

if (mysqli_query($conn, $sql1)) {
    header("Location:{$hostname}/Admin/emp.php");
} else {
    echo "<p style='color:red; text-align:center; margin:10px 0;'>Can't Delete </p>";
}
