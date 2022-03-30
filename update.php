<?php
include 'dbcn.php';
$id=$_GET['updateid'];
$sql="Select * from `main_data` where id=$id";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row['first_name'];
$lname=$row['last_name'];
$bgroup=$row['blood_group'];
$dept=$row['dept'];

if(isset($_POST['submit'])){
	$firstName=$_POST['fname'];
	$lastName=$_POST['lname'];
	$bloodGroup=$_POST['std'];
	$deptName=$_POST['deptname'];

	$sql="update `main_data` set id=$id,first_name='$firstName',last_name='$lastName',blood_group='$bloodGroup',dept='$deptName' where id=$id";
	$result=mysqli_query($connection,$sql);
	if($result){
		// echo "Data Inserted";
		header('location:display.php');
	}
	else{
		die(mysqli_error($connection));
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Assignment</title>
</head>
<body>
	<div class="container">
		<form method="POST">
  <div class="form-group">
    <label><b>First Name</b></label>
    <input type="text" class="form-control" placeholder="Enter Your First Name" name="fname" value=<?php echo $fname ?>>
  </div>
  <div class="form-group">
    <label><b>Last Name</b></label>
    <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lname" value=<?php echo $lname ?>>
  </div>
  <div class="form-group">
    <label><b>Blood Group</b></label>
    <select name="std" class="form-control" value=<?php echo $bgroup ?>>
    	<option value="">Select Blood Group</option>
    	<option value="A+">A+</option>
    	<option value="A-">A-</option>
    	<option value="B+">B+</option>
    	<option value="B-">B-</option>
    	<option value="O+">O+</option>
    	<option value="O-">O-</option>
    	<option value="AB+">AB+</option>
    	<option value="AB-">AB-</option>
    </select>
    <!-- <input type="text" class="form-control" placeholder="Enter Your First Name" name="fname"> -->
  </div>
  <div class="form-group">
    <label><b>Department</b></label>
    <input type="text" class="form-control" placeholder="Enter Your Department Name" name="deptname" value=<?php echo $dept ?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
	</div>
</body>
</html>