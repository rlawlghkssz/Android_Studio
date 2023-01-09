<?php
	$con = mysqli_connect("localhost", "jihwanmo", "jihwanmobile!11", "jihwanmo");
	mysqli_query($con,'set names utf8');
	$result = mysqli_query($con, "SELECT * FROM NOTICE ORDER BY noticeDate DESC;");
	$response = array();

	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array("noticeContent"=>$row[0], "noticeName"=>$row[1], "noticeDate"=>$row[2]));
	}

	echo json_encode(array("response"=>$response));
	mysqli_close($con);

?>