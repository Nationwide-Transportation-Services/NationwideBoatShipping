<?php
//error_reporting(-1);

//echo "<pre>"; print_r ( $_POST ); echo "</pre>";
//echo "<pre>"; print_r ( $_FILES ); echo "</pre>";

$domain = $_SERVER['HTTP_HOST'];
$EMAIL_TO_USE = 'boats@nationwidetransportservices.com, lucas@nationwidetransportservices.com, julian@nationwidetransportservices.com, jason@nationwidetransportservices.com';
//$EMAIL_TO_USE = 'julz@nationwideboatshipping.com';

$mail_to = $EMAIL_TO_USE;
$from_mail = 'sales@nationwideboatshipping.com';
$from_name = $domain;
$reply_to = $EMAIL_TO_USE;

// carriage return type (we use a PHP end of line constant)
$eol = '';
$eol2 = PHP_EOL;

$boundary = md5(uniqid(time()));
$headers = '';

$headers .= "From: " . $from_name . " <".$from_mail.">" . $eol2;
$headers .= "Reply-To: " . $reply_to . $eol2;
if ( isset($_POST['sendme']) ){
	if ( $_POST['sendme'] == '1' ){
		$headers .= "CC: ". $_POST['email'] . $eol2;
	}
}
$headers .= "MIME-Version: 1.0\r\n";

$subject = "Boat Shipping Request";
$email_message = "";
$message = '';
$email_message .= '<table width="600" border="0" cellspacing="0" cellpadding="0">';
$email_message .= '	<tr>';
$email_message .= '		<td>Name</td>';
$email_message .= '		<td>' . $_POST['From_Name'] . '</td>';
$email_message .= '	</tr>';
$email_message .= '	<tr><td colspan="2">&nbsp;</td></tr>';
$email_message .= '	<tr>';
$email_message .= '		<td>Email</td>';
$email_message .= '		<td>' . $_POST['email'] . '</td>';
$email_message .= '	</tr>';
$email_message .= '	<tr><td colspan="2">&nbsp;</td></tr>';
$email_message .= '	<tr>';
$email_message .= '		<td>Phone</td>';
$email_message .= '		<td>' . $_POST['phone'] . '</td>';
$email_message .= '	</tr>';
$email_message .= '	<tr><td colspan="2">&nbsp;</td></tr>';
$email_message .= '	<tr>';
$email_message .= '		<td>Ship Date</td>';
$email_message .= '		<td>' . $_POST['Ship_Date'] . '</td>';
$email_message .= '	</tr>';
$email_message .= '	<tr><td colspan="2">&nbsp;</td></tr>';
$email_message .= '	<tr>';
$email_message .= '		<td>Pickup zip</td>';
$email_message .= '		<td>' . $_POST['pickupZip'] . '</td>';
$email_message .= '	</tr>';
$email_message .= '	<tr><td colspan="2">&nbsp;</td></tr>';
$email_message .= '	<tr>';
$email_message .= '		<td>Delivery zip</td>';
$email_message .= '		<td>' . $_POST['deliveryZip'] . '</td>';
$email_message .= '	</tr>';
$email_message .= '	<tr><td colspan="2">&nbsp;</td></tr>';
$email_message .= '	<tr>';
$email_message .= '		<td>Year</td>';
$email_message .= '		<td>' . $_POST['vehicle_Year'] . '</td>';
$email_message .= '	</tr>';
$email_message .= '	<tr><td colspan="2">&nbsp;</td></tr>';
$email_message .= '	<tr>';
$email_message .= '		<td>Make</td>';
$email_message .= '		<td>' . $_POST['vehicle_Make'] . '</td>';
$email_message .= '	</tr>';
$email_message .= '	<tr><td colspan="2">&nbsp;</td></tr>';
$email_message .= '	<tr>';
$email_message .= '		<td>Model</td>';
$email_message .= '		<td>' . $_POST['vehicle_Model'] . '</td>';
$email_message .= '	</tr>';
$email_message .= '	<tr><td colspan="2">&nbsp;</td></tr>';
$email_message .= '	<tr>';
$email_message .= '		<td>Carrier</td>';
$email_message .= '		<td>' . $_POST['carrier_type'] . '</td>';
$email_message .= '	</tr>';
$email_message .= '	<tr>';
$email_message .= '		<td colspan="2">This Quote is from: ' . $domain . '</td>';
$email_message .= '	</tr>';
$email_message .= '</table>';


if ( isset( $_FILES["pic"]["error"] ) ){
	if ( trim($_FILES["pic"]["error"]) == '0' ){		
		//echo 'in file code';		
		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["pic"]["name"]);
		if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
			$ImgFileName = basename( $_FILES["pic"]["name"] ) ;
			$FileType = $_FILES["pic"]["type"];			
			//echo '<p>The file " ' . $ImgFileName . ' " has been uploaded.</p>';
		} else {
			//echo "Sorry, there was an error uploading your file.";
		}		
		
		// Attachment location
		$filename = $ImgFileName;
		$path =  $target_file ;
		
		// Read the file content
		$file = $target_file ; // $path.$file_name;
		
		$file_size = filesize($file);
		$handle = fopen($file, "r");
		$content = fread($handle, $file_size);
		fclose($handle);
		$content = chunk_split(base64_encode($content));

		// a random hash will be necessary to send mixed content
		$separator = md5(time());

		// main header (multipart mandatory)
		$headers .= "Content-Type: multipart/mixed;\n boundary=\"{" . $separator . "}\"";

		// message
		$message .= "This is a multi-part message in MIME format.\n\n" . "--{" . $separator . "}\n" . "Content-Type: text/html; charset=\"ISO-8859-1\"\n" . "Content-Transfer-Encoding: 8bit\n\n" . $email_message . "\n\n"; 
        $message .= "--{" . $separator . "}\n";

		// attachment
		//$message .= "Content-Type: {\"application/octet-stream\"}; name=\"" . $filename . "\"\n";
		$message .= "Content-Type: " . $FileType . "; name=\"" . $filename . "\"\n";
		//$FileType
		$message .= "Content-Disposition: attachment;\n filename=\"" . $filename . "\"\n";
		$message .= "Content-Transfer-Encoding: base64\n\n" . $content . "\n\n";
		$message .= "--" . $separator . "--\n";
		
		unlink($target_file);
		mail($mail_to, $subject, $message, $headers);
		header("location:index.php?c=yes&name=".$_POST['From_Name']);
				
	}else{
		//echo 'in msg code1';
		$headers .= "Content-type:text/html; charset=iso-8859-1" . $eol2;
		mail($mail_to, $subject, $email_message, $headers);	
	}	
}else{	
	//echo 'in msg code2';
	$headers .= "Content-type:text/html; charset=iso-8859-1" . $eol2;
	mail($mail_to, $subject, $email_message, $headers);
}

?>