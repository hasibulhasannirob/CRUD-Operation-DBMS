<?php
include 'dbcn.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Display</title>
</head>
<body>
		<div class="container">
			<button class="btn btn-warning my-5"><a href="user.php" class="text-dark"><b>Add Info</b></button>

				<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Department</th>
      <th scope="col">Settings</th>
    </tr>
  </thead>
  <tbody>
    <?php
    	$sql="Select * from `main_data`";
    	$result=mysqli_query($connection,$sql);
    	if($result){
    		while($row=mysqli_fetch_assoc($result)){
    			$id=$row['id'];
    			$fname=$row['first_name'];
    			$lname=$row['last_name'];
    			$bgroup=$row['blood_group'];
    			$dept=$row['dept'];
    			echo ' <tr>
					      <th scope="row">'.$id.'</th>
					      <td>'.$fname.'</td>
					      <td>'.$lname.'</td>
					      <td>'.$bgroup.'</td>
					      <td>'.$dept.'</td>
					      <td>
					      <button class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-dark"><b>Update</b></button>
					      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-dark"><b>Delete</b></button>
					      </td>
    					</tr>';
    		}
    	}

    ?>
  </tbody>
</table>

		</div>
</body>
</html>