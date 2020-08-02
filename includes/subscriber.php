<?php
//include config file
include('config.php');
if (isset($_POST['subscribers'])) {
    $email = $_POST['email'];

    $query = "INSERT INTO subscribers(email)VALUES('$email')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo "Thank you for Subscribing to my blogs";
        header("Location: ../blog.php");
    } else {
        echo
            "subcription failed" . mysqli_error($conn);
    }
} else {
    echo "subcription failed";
}
