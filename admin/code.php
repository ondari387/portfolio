<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','busbooking');
	$success = "";
	$failure = "";

	if (isset($_POST['schedule'])) {
		
		$destination = mysqli_escape_string($conn, strtoupper($_POST['dest']));
		$regno = mysqli_real_escape_string($conn,strtoupper($_POST['regno'])); 
		$depature = strtoupper($_POST['dept_place']);
		$fare = strtoupper($_POST['fare']);
		$date = strtoupper($_POST['book_date']);
		$time = strtoupper($_POST['book_time']);

		$query = "INSERT INTO travel_schedule (regno,depature,destination,fare,date,time) VALUES ('$regno','$depature','$destination','$fare','$date','$time')";

		$query_run = mysqli_query($conn, $query);

		if ($query_run) {
			$success='<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Unsuccessful!</strong> success.
                  </div>';
			//$_SESSION['success'] = "Username added successfully";
			//header('Location: about_me.php');

		}else{
			$failure='<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Unsuccessful!</strong> Login Unsuccessful.
                  </div>';
			echo "failed".mysqli_error($conn);
			//$_SESSION['status'] = "Username not added successfully";
			//header('Location: home.php');
		}
	}
?>

<?php
	if (isset($_POST['delete_btn'])) {

		$id = $_POST['delete_id'];
		$query = "DELETE FROM travel_schedule WHERE id='$id'";
		$query_run = mysqli_query($conn, $query);

		if ($query_run) {
			
			$_SESSION['success'] = "Record deleted successfully";
			header('Location: trips.php');

		}else{
			echo "failed " .mysqli_error($conn);
			$_SESSION['status'] = "Recorded not deleted successfully";
			header('Location: trips.php');
		}
	}
?>

<?php 
 if (isset($_SESSION['success']) && $_SESSION['success']!='') {
 	echo $_SESSION['success'];
 	unset($_SESSION['success']);
 }
if (isset($_SESSION['status']) && $_SESSION['status']!='') {
 	echo $_SESSION['status'];
 	unset($_SESSION['status']);
 }

 ?>
 