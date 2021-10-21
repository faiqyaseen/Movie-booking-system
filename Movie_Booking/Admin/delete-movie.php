<?php

include "config.php";
$movie_id = $_GET['id'];

$sql = "SELECT * FROM movie WHERE movie_id = {$movie_id}";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

unlink("movie-gallery/".$row['images']);

$sql2 = "DELETE FROM movie WHERE movie_id = {$movie_id};";
if(mysqli_query($conn,$sql2)){
    header("Location:{$hostname}/admin/movies.php");
}else{
    echo "Query Failed";
}

?>