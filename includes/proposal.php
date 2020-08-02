<?php
//include config file
include('config.php');
if (isset($_POST['proposal'])) {
    $email = $_POST['email'];

    $query = "INSERT INTO proposal(email)VALUES('$email')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        header("Location: ../index.php");
        echo '<script> alert("Thank you for reaching us. We will email you our proposal");</script>';
    } else {
        echo "subcription failed" . mysqli_error($conn);
    }
} else {
    echo "subcription failed";
}
