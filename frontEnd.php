<html>

	<head>
		<title>Front Page</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<div class = 'container'>
			<div id = 'table-first'>
				<center><h2>Approved Messages</h2></center>
				<table class='table table-condensed table-bordered'>
					<thead>
						<th>Name/Date</th>
						<th>Messages</th>
					</thead>
					<tbody>	
						<tr>
							<?php 
								include "messageDAO.php";
								$obj = new MessageDAO();
								$recordWithApproval = $obj->showTableWithApproval();
								if(is_null($recordWithApproval)){
									echo "<td> No Content</td>";
									echo "<td> No Content</td>";
								}else{
									foreach($recordWithApproval as $record){
										echo "<tr><td>" . $record['name'] . "<br/>" . $record['date_posted'] . "</td>";
										echo "<td>" . $record['message'] . "</td></tr>";
									}
								}
					 		?>
						</tr>
					</tbody>
				</table>
			</div>
		
			<div id = 'table-second' class = 'well'>		
				<table>
					<tr>
						<td>
							
							<h2>POST NEW MESSAGE</h2>
							<div class = 'form-group'>	
								<form method = "post" action = "backEnd.php">
									<span>Name</span>
									<input type = "text" name = "name" id = "name" placeholder = "Name" class = "form-control" ><br>
									<span>Email</span>
									<input type = "email" name = "emailAdd" id = "emailAdd" placeholder = 'Email' class = "form-control" ><br>
									<span>Message</span>
									<textarea rows = "5" cols = "22" name = "message" id = "message" placeholder = 'Message' class = "form-control" ></textarea><br>
									<input type = "submit" name = "submitBtn" value = "POST MESSAGE" onclick = "return validate();"  class = 'btn btn-success'><br/>	
								</form>
							</div>
							
						</td>
					</tr>	
				</table>
			</div>
		</div>
		<div id = 'direct'>
			<a href="view.php">Admin page</a>
		</div>
	</body>
		
</html>
 <script type="text/javascript">
 	function validate() {
 		var name = document.getElementById("name").value;
 		var emailAdd = document.getElementById("emailAdd").value;
 		var emailAddIsAllowAt = false;
 		var emailAddIsAllowDot = false;
 		if(name.length != "" && emailAdd.length != ""){
	 		for(i = 0; i < emailAdd.length; i++){
	 			if(emailAdd.charAt(i) == '@'){
	 				emailAddIsAllowAt = true;
	 			}
		 		if(emailAdd.charAt(i) == '.'){
		 			emailAddIsAllowDot = true;
		 		}
	 		}

	 		if(emailAddIsAllowAt && !emailAddIsAllowDot){
	 			alert("Need '.' in emailadd");
	 			return false;
	 		}else if(!emailAddIsAllowAt && emailAddIsAllowDot){
	 			alert("Need '@' in emailadd");
	 			return false;
	 		}else if(!emailAddIsAllowAt && !emailAddIsAllowDot){
	 			alert("Check if either '@' or '.' is missing");
	 			return false;
	 		}else{
	 			return true;
	 		}
 		}else{
 			alert("Either name or email is Invalid");
 			return false;
 		}
 		
 	}

 </script>
