<?php
//include config file
include('config.php');
if (isset($_POST['comments'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO comments(fname,email,message)VALUES('$fname','$email','$message')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo "Thank you for Subscribing to my blogs";
        header("Location: ../blogs.php");
    } else {
        //echo "subcription failed" . mysqli_error($conn);
    }
} else {
    //echo "subcription failed";
}
