	<?php


	$db = mysqli_connect('localhost', 'root', '', 'CIS224_php');
	// built-in functions that connects to the database

	$sql = "SELECT * FROM Employees";
	// query that you want to trigger

	$result = mysqli_query($db, $sql);
	// run the query using the database connection and the query

	?>

<!DOCTYPE html> 
<html>
<head>
<title>Testing database link</title>
</head>

<body>

	<table border="1px">
	<tr>
		<th>Emp_ID</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Phone</th>
	</tr>
	
	
	<?php 
	if(mysqli_num_rows($result) > 0) // Have we reached the end of the table? // Does the row have tables?
	{
		while($row = mysqli_fetch_array($result)) // Pull the row.
		{
	?>
	
	<tr>
		<td><?php echo $row["Emp_ID"];?></td>
		<td><?php echo $row["LastName"];?></td>
		<td><?php echo $row["FirstName"];?></td>
		<td><?php echo $row["Phone"];?></td>
	</tr>
	
	<?php
		} // Closes the while loop
	} // Close if
	?>
	</table>

</body>
</html>
