<?php
include_once($_SERVER['DOCUMENT_ROOT'].'cloud/models/main/index.php');
	

function beta($email, $referrer){
	
	$ip = $_SERVER['REMOTE_ADDR'];

	dbQuery("INSERT INTO beta (email, ip, referrer) VALUES ('$email', '$ip', '$referrer')");

	return array("status"=>"success", "reason"=>"beta user signed up");
}

?>