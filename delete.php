<?php 
	include "messageDAO.php";
	$obj = new MessageDAO();
	$id = $_GET['id'];

	$obj->delete($id);
	header('Location:view.php');

 ?>
