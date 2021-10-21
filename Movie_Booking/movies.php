<?php
include "header.php";
?>
<!-- ==========Banner-Section========== -->
<section class="banner-section">
    <div class="banner-bg bg_img bg-fixed" data-background="assets/images/banner/banner02.jpg"></div>
    <div class="container">
        <div class="banner-content">
            <h1 class="title bold">get <span class="color-theme">movie</span> tickets</h1>
            <p>Buy movie tickets in advance, find movie times watch trailer, read movie reviews and much more</p>
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
                        <h6 class="category">welcome to Movie Bookin </h6>
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
                    </ul>
                </div> -->
            </div>
            <div class="tab-area">
                <div class="tab-item active">
                    <form class="ticket-search-form">
                        <div class="form-group large">
                            <input type="text" placeholder="Search for Movies">
                            <button type="submit"><i class="fas fa-search"></i></button>
                            <!-- <div class="mt-2 p-1 rounded movie-search col-md-12">
                                <ul>
                                    <li>abc</li>
                                    <li>bca</li>
                                    <li>cab</li>
                                </ul>
                            </div> -->
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
                                <option value="26-12-19">23/10/2020</option>
                                <option value="26-12-19">24/10/2020</option>
                                <option value="26-12-19">25/10/2020</option>
                                <option value="26-12-19">26/10/2020</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="assets/images/ticket/cinema.png" alt="ticket">
                            </div>
                            <span class="type">cinema</span>
                            <select class="select-bar">
                                <option value="Awaken">Awaken</option>
                                <option value="dhaka">dhaka</option>
                                <option value="rosario">rosario</option>
                                <option value="madrid">madrid</option>
                                <option value="koltaka">kolkata</option>
                                <option value="rome">rome</option>
                                <option value="khoksa">khoksa</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Ticket-Search========== -->

<!-- ==========Movie-Section========== -->
<section class="movie-section padding-top padding-bottom">
    <div class="container">
        <div class="row flex-wrap-reverse justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-3">
                <div class="widget-1 widget-banner">
                    <div class="widget-1-body">
                        <a href="#0">
                            <img src="assets/images/sidebar/banner/banner01.jpg" alt="banner">
                        </a>
                    </div>
                </div>
                <div class="widget-1 widget-check">
                    <div class="widget-header">
                        <h5 class="m-title">Filter By</h5> <a href="#0" class="clear-check">Clear All</a>
                    </div>
                    <div class="widget-1-body">
                        <h6 class="subtitle">Language</h6>
                        <div class="check-area">
                            <div class="form-group">
                                <input type="checkbox" name="lang" id="lang1"><label for="lang1">Tamil</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="lang" id="lang2"><label for="lang2">Telegu</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="lang" id="lang3"><label for="lang3">Hindi</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="lang" id="lang4"><label for="lang4">English</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="lang" id="lang5"><label for="lang5">Multiple Language</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="lang" id="lang6"><label for="lang6">Gujrati</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="lang" id="lang7"><label for="lang7">Bangla</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-1 widget-check">
                    <div class="widget-1-body">
                        <h6 class="subtitle">experience</h6>
                        <div class="check-area">
                            <div class="form-group">
                                <input type="checkbox" name="mode" id="mode1"><label for="mode1">2d</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="mode" id="mode2"><label for="mode2">3d</label>
                            </div>
                        </div>
                        <div class="add-check-area">
                            <a href="#0">view more <i class="plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="widget-1 widget-check">
                    <div class="widget-1-body">
                        <h6 class="subtitle">genre</h6>
                        <div class="check-area">
                            <div class="form-group">
                                <input type="checkbox" name="genre" id="genre1"><label for="genre1">thriller</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="genre" id="genre2"><label for="genre2">horror</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="genre" id="genre3"><label for="genre3">drama</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="genre" id="genre4"><label for="genre4">romance</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="genre" id="genre5"><label for="genre5">action</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="genre" id="genre6"><label for="genre6">comedy</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="genre" id="genre7"><label for="genre7">romantic</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="genre" id="genre8"><label for="genre8">animation</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="genre" id="genre9"><label for="genre9">sci-fi</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="genre" id="genre10"><label for="genre10">adventure</label>
                            </div>
                        </div>
                        <div class="add-check-area">
                            <a href="#0">view more <i class="plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="widget-1 widget-banner">
                    <div class="widget-1-body">
                        <a href="#0">
                            <img src="assets/images/sidebar/banner/banner02.jpg" alt="banner">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mb-50 mb-lg-0">
                <div class="filter-tab tab">
                    <div class="filter-area">
                        <div class="filter-main">
                            <div class="left">
                                <div class="item">
                                    <span class="show">Show :</span>
                                    <select class="select-bar">
                                        <option value="12">12</option>
                                        <option value="15">15</option>
                                        <option value="18">18</option>
                                        <option value="21">21</option>
                                        <option value="24">24</option>
                                        <option value="27">27</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                                <div class="item">
                                    <span class="show">Sort By :</span>
                                    <select class="select-bar">
                                        <option value="showing">now showing</option>
                                        <option value="exclusive">exclusive</option>
                                        <option value="trending">trending</option>
                                        <option value="most-view">most view</option>
                                    </select>
                                </div>
                            </div>
                            <ul class="grid-button tab-menu">
                                <li class="active">
                                    <i class="fas fa-th"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-area">
                        <div class="tab-item">
                            <div class="row mb-10 justify-content-center">
                                <?php
                                include "config.php";
                                $limit = 12;

                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                } else {
                                    $page = 1;
                                }
                                $offset = ($page - 1) * $limit;
                                $sql = mysqli_query($conn, "SELECT * FROM movie ORDER BY movie_id ASC LIMIT {$offset},{$limit}");
                                while ($row1 = mysqli_fetch_assoc($sql)) {

                                ?>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">

                                            <div class="movie-thumb c-thumb">
                                                <a href="movie-details.php?id=<?php echo $row1['movie_id'] ?>">
                                                    <img src="Admin/movie-gallery/<?php echo $row1['images'] ?>" height="350" width="200" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="movie-details.php?id=<?php echo $row1['movie_id'] ?>"><?php echo $row1['movie_title'] ?></a>
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
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-area text-center">
                            <?php
                            $sql1 = "SELECT * FROM movie";
                            $result1 = mysqli_query($conn, $sql1);
                            if (mysqli_num_rows($result1) > 0) {
                                $total_records = mysqli_num_rows($result1);

                                $total_pages = ceil($total_records / $limit);
                                if ($page > 1) {
                                    $prevdisable = "";
                                } else {
                                    $prevdisable = "disabled";
                                }
                                echo "<a href='movies.php?page=" . ($page - 1) . "'><i class='fas fa-angle-double-left $prevdisable '></i><span>Prev</span></a>";
                                for ($i = 1; $i <= $total_pages; $i++) {
                                    if ($i == $page) {
                                        $active = "active";
                                    } else {
                                        $active = "";
                                    }
                                    echo "<a href='movies.php?page=" . $i . "' class='$active'>" . $i . "</a>";
                                }
                                if ($total_pages > $page) {
                                    $nextdisable = "";
                                } else {
                                    $nextdisable = "disabled";
                                }
                                echo "<a href='movies.php?page=" . ($page + 1) . "'><span>Next</span><i class='fas fa-angle-double-right {$nextdisable}'></i></a>";
                            }
                            ?>
                        </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Movie-Section========== -->
<?php
include "footer.php";
?>