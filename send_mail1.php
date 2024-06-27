<?php
if($_POST['email'] == "")//If they did not fill out the workemail field - which is the fake field in the form to mitigate spam...
{
header("location:index.php");
exit;
}else {
$isSpam = false;
}	


	//------SUBJECT------//
	$subject = "Boat Shipping Request";
	$domain = $_SERVER['HTTP_HOST'];
	
    /* message */
	
	$message  = "Name:        $_POST[From_Name]<br/>";
	$message .= "Email:       $_POST[email]<br/>";
	$message .= "Phone:       $_POST[phone]<br/>";
	$message .= "Ship Date:   $_POST[Ship_Date]<br/>";
	$message .= "Pickup zip:  $_POST[pickupZip]<br/>";
	$message .= "Delivery zip:$_POST[deliveryZip]<br/>";
	$message .= "Year:        $_POST[vehicle_Year]<br/>";
	$message .= "Make:        $_POST[vehicle_Make]<br/>";
	$message .= "Model:       $_POST[vehicle_Model]<br/>";
	$message .= "Carrier:     $_POST[carrier_type]<br/>";
	$message .= "This Quote is from: $domain";
	
	//------headers------//	
	$headers  = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";		
	$headers .= "From: $domain <sales@nationwideboatshipping.com>\r\n";				
    if(isset($_POST['sendme']))
		mail($_POST['email'], $subject, $message, $headers);
	
	mail('boats@nationwidetransportservices.com', $subject, $message, $headers);
	
	header("location:index.php?c=yes&name=".$_POST['From_Name']);
?>