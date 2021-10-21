<?php

include "config.php";

if (isset($_POST['save'])) {

    if (!empty($_FILES['postimg']['name'])) {
            
            $pos_errors = array();
            
            // poster upload
            $pos_name = $_FILES['postimg']['name'];
            $pos_size = $_FILES['postimg']['size'];
            $pos_tmp = $_FILES['postimg']['tmp_name'];
            $pos_type = $_FILES['postimg']['type'];
            // $pos_ext = strtolower(end(explode('.', $pos_name)));
            // $pos_extesions = array("jpeg", "jpg", "png");
            
            // if (in_array($pos_ext, $pos_extesions) === false) {
            //     $pos_errors[] = "that poster picture is not allowed, please choose a jpg or jpeg or png picture";
            // }
            if ($pos_size > 2097152) {
                $pos_errors[] = "Image must be 2mb or lower.";
            }
            $pos_image = time() . "-" . basename($pos_name);
            if (empty($pos_errors) == true) {
                move_uploaded_file($pos_tmp, "movie-gallery/" . $pos_image);
            } else {
                print_r($pos_errors);
                die();
            }

            // Query 
            $movie_title = mysqli_real_escape_string($conn, $_POST['mtitle']);
            $movie_description = mysqli_real_escape_string($conn, $_POST['mdesc']);
            $movie_duration = mysqli_real_escape_string($conn, $_POST['duration']);
            $movie_language = mysqli_real_escape_string($conn, $_POST['mlanguage']);
            $release_date = mysqli_real_escape_string($conn, $_POST['rel_date']);
            $country = mysqli_real_escape_string($conn, $_POST['country']);
            $genre = mysqli_real_escape_string($conn, $_POST['genre']);
            $trailer = $_POST['trailer'];


            $sql = "SELECT movie_title FROM movie WHERE movie_title = '{$movie_title}'";
            $result = mysqli_query($conn, $sql) or die("Query Failed");

            if (mysqli_num_rows($result) > 0) {
                echo "<p style='color:red; text-align:center; margin:10px 0;'> Movie already exists </p>";
            } else {
                $sql1 = "INSERT INTO movie(movie_title, movie_description, movie_duration,
                movie_language, release_date, country, gen_id, images, trailer)
                VALUES ('$movie_title','$movie_description','$movie_duration','$movie_language',
                '$release_date',$country,$genre,'$pos_image','$trailer')";
                if (mysqli_query($conn, $sql1)) {
                    header("Location:{$hostname}/Admin/movies.php");
                }
            }
        
    }   
}
