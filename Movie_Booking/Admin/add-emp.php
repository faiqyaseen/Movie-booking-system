<?php

include "header.php";
include "aside.php";
include "page-wrapper.php";
?>

    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-md-12">
                <h1 class="">Add emp</h1>
            </div> -->
            <div class="col-md-6 m-auto">
                <form action="save-emp.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date" name="dob" class="form-control" placeholder="date of birth" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>emp Role</label>
                        <select class="form-control" name="role">
                            <option value="0">Normal emp</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Select Profile</label>
                        <input type="file" name="profileimg">
                    </div>
                    <input type="submit" name="save" class="btn btn-primary" value="Save" required />

                </form>
            </div>
        </div>

    </div>

    <?php
    include "footer.php";
    ?>