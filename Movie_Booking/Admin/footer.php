<?php
include "config.php";
$sql = "SELECT * FROM settings";

$result = mysqli_query($conn, $sql) or die("query failed");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<footer class='footer text-center'>
                {$row["footer"]}
            </footer>";
    }
}
?>

</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="Adminlib/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="Adminlib/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="Adminlib/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="Adminlib/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="Adminlib/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="Adminlib/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="Adminlib/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="Adminlib/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="Adminlib/dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="Adminlib/assets/libs/flot/excanvas.js"></script>
<script src="Adminlib/assets/libs/flot/jquery.flot.js"></script>
<script src="Adminlib/assets/libs/flot/jquery.flot.pie.js"></script>
<script src="Adminlib/assets/libs/flot/jquery.flot.time.js"></script>
<script src="Adminlib/assets/libs/flot/jquery.flot.stack.js"></script>
<script src="Adminlib/assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="Adminlib/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="Adminlib/dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>