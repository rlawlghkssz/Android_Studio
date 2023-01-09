<?php
	$con = mysqli_connect("localhost", "jihwanmo", "jihwanmobile!11", "jihwanmo");

	$userID = $_POST["userID"];
	$courseID = $_POST["courseID"];

	$statement = mysqli_query($con, "DELETE FROM SCHEDULE WHERE userID = '$userID' AND courseID = '$courseID' ");


	$response = array();
	$response["success"] = true;

	echo json_encode($response);
?>	