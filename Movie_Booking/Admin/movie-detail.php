<?php
include "header.php";
include "aside.php";
include "page-wrapper.php";
?>




<div class="container-fluid">
    <div class="row">
        <?php
        $movie_id = $_GET['id'];
        $sql = "SELECT *FROM movie LEFT JOIN 
                genre ON movie.gen_id = genre.gen_id
                LEFT JOIN countries ON movie.country = countries.id
                WHERE movie_id = $movie_id";
        $result = mysqli_query($conn, $sql) or die("query failed");
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="col-md-10">
            <h1 class=""><?php echo $row['movie_title'] . " Movie" ?></h1>
        </div>


        <div class="col-md-12">
            <dl class="dl-horizontal">
                <hr />
                <dt>
                    <h3>Title</h3>
                </dt>
                <hr />
                <dd class="text-center">
                    <h4><?php echo ucwords($row['movie_title']); ?></h4>
                </dd>
                <hr />
                <hr />
                <dt>
                    <h3>Genre</h3>
                </dt>
                <hr />
                <dd class="text-center">
                    <h4><?php echo ucwords($row['genre']); ?></h4>
                </dd>
                <hr />
                <hr />
                <dt>
                    <h3>Duration</h3>
                </dt>
                <hr />
                <dd class="text-center">
                    <h4><?php echo $row['movie_duration']; ?></h4>
                </dd>
                <hr />
                <hr />
                <dt>
                    <h3>Description</h3>
                </dt>
                <hr />
                <dd class="text-center">
                    <h4><?php echo $row['movie_description']; ?></h4>
                </dd>
                <hr />
                <hr />
                <dt>
                    <h3>Release Date</h3>
                </dt>
                <hr />
                <dd class="text-center">
                    <h4><?php echo $row['release_date']; ?></h4>
                </dd>
                <hr />
                <hr />
                <dt>
                    <h3>Language</h3>
                </dt>
                <hr />
                <dd class="text-center">
                    <h4><?php echo ucwords($row['movie_language']); ?></h4>
                </dd>
                <hr />
                <hr />
                <dt>
                    <h3>Country</h3>
                </dt>
                <hr />
                <dd class="text-center">
                    <h4><?php echo $row['country_name']; ?></h4>
                </dd>
                <hr />
                <hr />
                <dt>
                    <h3>Poster</h3>
                </dt>
                <hr />
                <dd class="text-center font-weight-bold"><img src="movie-gallery/<?php echo $row['images']; ?>" height="350" width="300" alt=""></dd>
                <hr />
                <hr />
                <dt>
                    <h3>Trailer</h3>
                </dt>
                <hr />
                <dd>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo $row['trailer']; ?>" allowfullscreen></iframe>
                    </div>
                </dd>
                <hr />
                <hr />


            </dl>

        </div>
    </div>


</div>

<?php
include "footer.php";
?>