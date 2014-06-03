<html>
	<head>
		<title>Messages</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<h2>Messages</h2>
		<div class = 'container'>
			<table class = 'table table-striped table-bordered'>
				<th>Name<th>Email<th>Message<th>Date posted<th>Status<th colspan = '2'>Action</th>
					<?php 
						include "messageDAO.php";

						$name = $_POST['name'];
						$emailAdd = $_POST['emailAdd'];
						$message = $_POST['message'];

						if($name != "" && $emailAdd != "" && $_POST['submitBtn']){
							$obj = new MessageDAO();
							$obj->insert($name, $emailAdd, $message);
							header('Location: frontEnd.php');
							$record = $obj->showTable();
							foreach($record as $rec){
								echo "<tr>";
								echo "<td>". $rec['name']. "</td>";
								echo "<td>". $rec['email']. "</td>";
								echo "<td>". $rec['message']. "</td>";
								echo "<td>". $rec['date_posted']. "</td>";
								echo "<td>". $rec['is_approve']. "</td>";
								if($obj->is_approved($rec['is_approve'])){
									echo "<td><a class = 'btn btn-warning' href = 'rejected.php?id=" . $rec['id'] . "'>Reject</a></td>";
								}else{
									echo "<td><a class = 'btn btn-warning' href = 'approved.php?id=" . $rec['id'] . "'>Approve</a></td>";
								}
								
								echo "<td><a class = 'btn btn-danger' href = 'delete.php?id=" . $rec['id'] . "'>Delete</a></td></tr>";							
							}
						}

					 ?>
				</table>
		</div>
		
	</body>
</html>
