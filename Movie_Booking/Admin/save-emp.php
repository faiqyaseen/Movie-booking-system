<?php

include "config.php";
if (isset($_POST['save'])) {

    if (!empty($_FILES['profileimg']['name'])) {
        $errors = array();

        $file_name = $_FILES['profileimg']['name'];
        $file_size = $_FILES['profileimg']['size'];
        $file_tmp = $_FILES['profileimg']['tmp_name'];
        $file_type = $_FILES['profileimg']['type'];
        $file_tmp = $_FILES['profileimg']['tmp_name'];
        $file_ext = strtolower(end(explode('.', $file_name)));
        $extesions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extesions) === false) {
            $errors[] = "This extension file is not allowed, please choose a jpg or jpeg or png file";
        }
        if ($file_size > 2097152) {
            $errors[] = "Image must be 2mb or lower.";
        }

        $new_image = time() . "-" . basename($file_name);
        // $tareget = "upload/".$new_image;
        // $image_name = $new_image;
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "upload/" . $new_image);
        } else {
            print_r($errors);
            die();
        }
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $user = mysqli_real_escape_string($conn, $_POST['username']);
        $dob = $_POST['dob'];
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $role = mysqli_real_escape_string($conn, $_POST['role']);

        $sql = "SELECT username FROM tbl_emp WHERE username = '{$user}'";
        $result = mysqli_query($conn, $sql) or die("Query Failed");

        if (mysqli_num_rows($result) > 0) {
            echo "<p style='color:red; text-align:center; margin:10px 0;'> Username already exists </p>";
        } else {
            $sql1 = "INSERT INTO tbl_emp(first_name, last_name, username, dob, password,image, role) VALUES ('$fname','$lname','$user','$dob','$password','$new_image',$role)";
            if (mysqli_query($conn, $sql1)) {
                header("Location:{$hostname}/Admin/emp.php");
            }
        }
    } 
    else {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $user = mysqli_real_escape_string($conn, $_POST['username']);
        $dob = $_POST['dob'];
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirmpass = mysqli_real_escape_string($conn, md5($_POST['confirmpass']));
        $role = mysqli_real_escape_string($conn, $_POST['role']);

        $sql = "SELECT username FROM tbl_emp WHERE username = '{$user}'";
        $result = mysqli_query($conn, $sql) or die("Query Failed");

        if (mysqli_num_rows($result) > 0) {
            echo "<p style='color:red; text-align:center; margin:10px 0;'> Username already exists </p>";
        } else {
            if($password != $confirmpass){
                echo "<p style='color:red; text-align:center; margin:10px 0;'> Password not match </p>";
            }
            $sql1 = "INSERT INTO tbl_emp(first_name, last_name, username, dob, password) VALUES ('$fname','$lname','$user','$dob','$password')";
            if (mysqli_query($conn, $sql1)) {
                // echo "";
                header("Location:{$hostname}/Admin/emp.php");
            }
        }
    }
} 

?>
