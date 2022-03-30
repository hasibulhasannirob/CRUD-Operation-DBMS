<?php
include 'dbcn.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];
	$sql="delete from `main_data` where id=$id";
	$result=mysqli_query($connection,$sql);
	if($result){
		//echo "<b>Deleted Successfully</b>";
		header('location:display.php');
	}
	else{
		die(mysqli_error($connection));
	}
}

?>