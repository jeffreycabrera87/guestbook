<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<div class = 'container'>
		<span class = 'align-center'><h2>Admin</h2></span>
		<?php 
			include "messageDAO.php";
			$obj = new MessageDAO();
			$record = $obj->showTable();
			echo "<table <table class = 'table table-hover table-condensed'>";
			echo "<thead><tr><th>Name<th>Email<th>Message<th>Date posted<th>Status<th colspan = '2'>Action</tr></th></thead>";
			foreach($record as $rec){
				echo "<tr>";
				echo "<td>". $rec['name']. "</td>";
				echo "<td>". $rec['email']. "</td>";
				echo "<td>". $rec['message']. "</td>";
				echo "<td>". $rec['date_posted']. "</td>";
				echo "<td>". $rec['is_approve']. "</td>";
				if($obj->is_approved($rec['is_approve'])){
					echo "<td><a class = 'btn btn-success' href = 'rejected.php?id=" . $rec['id'] . "'>Reject</a>";
				}else{
					echo "<td><a class = 'btn btn-success' href = 'approved.php?id=" . $rec['id'] . "'>Approve</a>";
				}
				
				echo "<td><a onclick = 'return validate();' class = 'btn btn-danger' href = 'delete.php?id=" . $rec['id'] . "'>Delete</a></td></tr>";							
			}
			echo "</table>";
		?>

 	<div id = 'direct'>
		<a href="frontEnd.php">POST MESSAGE/View Approved messages</a>
	</div>


	</div>
	<script type="text/javascript">

		function validate() {
			var x = confirm('Delete this message?');

			if (x == true) {
				return true;
			} else {
				return false;
			}
		}
	</script>
</body>
</html>

 	
