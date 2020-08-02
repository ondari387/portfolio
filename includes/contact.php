<?php
//include config file
include('config.php');
if (isset($_POST['contact_message'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['messages'];

    $query = "INSERT INTO contact(fname,email,messages)VALUES('$fname','$email','$message')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo "Thank you for contacting us! We'll get back to you shortly";
        header("Location: ../index.php");
    } else {
        echo
            "Message not sent" . mysqli_error($conn);
    }
} else {
    echo "Message not sent";
}
