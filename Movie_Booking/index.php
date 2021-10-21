<?php
    include "header.php";
?>
    <!-- ==========Header-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="assets/images/banner/banner01.jpg"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title  cd-headline clip"><span class="d-block">book your</span> tickets for
                    <span class="color-theme p-0 m-0">
                        <b class="is-visible">Movie</b>
                        <!-- <b>Event</b>
                        <b>Sport</b> -->
                    </span>
                    <!-- <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Movie</b>
                        <b>Event</b>
                        <b>Sport</b>
                    </span> -->
                </h1>
                <p>Safe, secure, reliable ticketing.Your ticket to live entertainment!</p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Ticket-Search========== -->
    <section class="search-ticket-section padding-top pt-lg-0">
        <div class="container">
            <div class="search-tab bg_img" data-background="assets/images/ticket/ticket-bg01.jpg">
                <div class="row align-items-center mb--20">
                    <div class="col-lg-6 mb-20">
                        <div class="search-ticket-header">
                            <h6 class="category">welcome to Movie Booking </h6>
                            <h3 class="title">what are you looking for</h3>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 mb-20">
                        <ul class="tab-menu ticket-tab-menu">
                            <li class="active">
                                <div class="tab-thumb">
                                    <img src="assets/images/ticket/ticket-tab01.png" alt="ticket">
                                </div>
                                <span>movie</span>
                            </li>
                            <li>
                                <div class="tab-thumb">
                                    <img src="assets/images/ticket/ticket-tab02.png" alt="ticket">
                                </div>
                                <span>events</span>
                            </li> 
                            <li>
                                <div class="tab-thumb">
                                    <img src="assets/images/ticket/ticket-tab03.png" alt="ticket">
                                </div>
                                <span>sports</span>
                            </li>
                        </ul>
                    </div> -->
                </div>
                <div class="tab-area">
                    <div class="tab-item active">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search fo Movies">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/city.png" alt="ticket">
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <?php
                                    include "config.php";
                                    $b = mysqli_query($conn, "SELECT * FROM city");
                                    while ($row1 = mysqli_fetch_assoc($b)) {
                                        echo "<option value='{$row1["city_id"]}'>" . ucwords($row1["city_name"]) . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/date.png" alt="ticket">
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                <?php
                                    include "config.php";
                                    $b = mysqli_query($conn, "SELECT * FROM th_show");
                                    while ($row1 = mysqli_fetch_assoc($b)) {
                                        echo "<option value='{$row1["show_id"]}'>" . ucwords($row1["show_date"]) . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/cinema.png" alt="ticket">
                                </div>
                                <span class="type">theater</span>
                                <select class="select-bar">
                                <?php
                                    include "config.php";
                                    $b = mysqli_query($conn, "SELECT * FROM theater");
                                    while ($row1 = mysqli_fetch_assoc($b)) {
                                        echo "<option value='{$row1["th_id"]}'>" . ucwords($row1["th_name"]) . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="tab-item">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search fo Events">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/city.png" alt="ticket">
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">London</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/date.png" alt="ticket">
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2019</option>
                                    <option value="26-12-19">24/10/2019</option>
                                    <option value="26-12-19">25/10/2019</option>
                                    <option value="26-12-19">26/10/2019</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/cinema.png" alt="ticket">
                                </div>
                                <span class="type">event</span>
                                <select class="select-bar">
                                    <option value="angular">angular</option>
                                    <option value="startup">startup</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="Last-First">Last-First</option>
                                    <option value="wish">wish</option>
                                </select>
                            </div>
                        </form>
                    </div> -->
                    <!-- <div class="tab-item">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search fo Sports">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/city.png" alt="ticket">
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">London</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/date.png" alt="ticket">
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2019</option>
                                    <option value="26-12-19">24/10/2019</option>
                                    <option value="26-12-19">25/10/2019</option>
                                    <option value="26-12-19">26/10/2019</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/cinema.png" alt="ticket">
                                </div>
                                <span class="type">sports</span>
                                <select class="select-bar">
                                    <option value="football">football</option>
                                    <option value="cricket">cricket</option>
                                    <option value="cabadi">cabadi</option>
                                    <option value="madrid">madrid</option>
                                    <option value="gadon">gadon</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Ticket-Search========== -->

    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="left">
                        <h2 class="title">movies</h2>
                        <p>Be sure not to miss these Movies today.</p>
                    </div>
                    <ul class="tab-menu">
                        <li class="active">
                            now showing
                        </li>
                        <li>
                            coming soon
                        </li>
                        <li>
                            exclusive
                        </li>
                    </ul>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            <?php
                                include "config.php";
                                $sql = mysqli_query($conn,"SELECT * FROM movie ORDER BY movie_id ASC LIMIT 5 ");
                                while($row1 = mysqli_fetch_assoc($sql)){

                            ?>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="movie-details.php?id=<?php echo $row1['movie_id'] ?>">
                                            <img src="Admin/movie-gallery/<?php echo $row1['images'] ?>" height="250" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="movie-details.php?id=<?php echo $row1['movie_id'] ?>"><?php echo substr(ucwords($row1['movie_title']),0,15) ?></a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="assets/images/movie/tomato.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="assets/images/movie/cake.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="tab-item">
                    <div class="owl-carousel owl-theme tab-slider">
                            <?php
                                include "config.php";
                                $sql = mysqli_query($conn,"SELECT * FROM movie ORDER BY movie_id ASC LIMIT 5");
                                while($row1 = mysqli_fetch_assoc($sql)){

                            ?>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="movie-details.php?id=<?php echo $row1['movie_id'] ?>">
                                            <img src="Admin/movie-gallery/<?php echo $row1['images'] ?>" height="250" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="movie-details.php?id=<?php echo $row1['movie_id'] ?>"><?php echo substr(ucwords($row1['movie_title']),0,15) ?></a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="assets/images/movie/tomato.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="assets/images/movie/cake.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="tab-item">
                    <div class="owl-carousel owl-theme tab-slider">
                            <?php
                                include "config.php";
                                $sql = mysqli_query($conn,"SELECT * FROM movie WHERE movie_title LIKE '%a%' LIMIT 5");
                                while($row1 = mysqli_fetch_assoc($sql)){

                            ?>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="movie-details.php?id=<?php echo $row1['movie_id'] ?>">
                                            <img src="Admin/movie-gallery/<?php echo $row1['images'] ?>" height="250" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="movie-details.php?id=<?php echo $row1['movie_id'] ?>"><?php echo substr(ucwords($row1['movie_title']),0,16) ?></a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="assets/images/movie/tomato.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="assets/images/movie/cake.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
 include "footer.php";
?>