<?php
include('includes/header.php');

?>
<!--add data into booking database-->
<?php
	// Include config file
	
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'busbooking');
 
/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

if (isset($_POST['submit'])) {
	$depature = $_POST['depature'];
	$dest = $_POST['dest'];
	$travel_date = $_POST['travel_date'];

	$query = "INSERT INTO travel_schedule (Depature, Destination, Date) VALUES ('$depature', '$dest', '$travel_date')";

	if ($query($conn)===TRUE) {
		echo "saved";
	}else{
		echo "not saved";
	}
}else{
	echo "";
}
	
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mt-3 form col-md-4 m-auto">
	  <div class="form-group text-left text-left">
	    <label>From</label>
	    <input type="text" class="form-control" name="depature">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group text-left">
	    <label>To</label> 
	    <input type="password" class="form-control" name="dest">
	  </div>
	  <div class="form-group text-left">
	    <label>Travel Date</label>
	    <input type="date" class="form-control" name="travel_date">
	  </div>
	  <button type="submit" class="btn btn-block btn-primary mb-2" name="submit" href="index.php">schedule</button>
</form>