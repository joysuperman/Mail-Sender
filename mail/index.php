<?php

/**
 * @Author: SUPERMAN
 * @Date:   2022-06-29 11:37:32
 * @Last Modified by:   SUPERMAN
 * @Last Modified time: 2022-11-18 02:59:27
 */
require_once("phpMailer/PHPmailer.php");
require_once("phpMailer/Exception.php");
require_once("phpMailer/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);
	try{

	    $pm->SMTPDebug = 2;
	    $pm->isSMTP(true);
	    $pm->Host = "mail.email.com";
	    $pm->SMTPAuth = true;
	    $pm->Username = "mail@email.com";
	    $pm->Password = "Password";
	    $pm->SMTPSecure = "ssl";
	    $pm->Port = 465;

	    $pm->setFrom("test@mail.com");
	    $pm->addAddress("hello@mail.com");
	    $pm->Subject = "Here is the invoice";
	    $pm->Body = "Hi, Here is the <strong>invoice</strong> from your last purchase";
	    $pm->AltBody = "Here is the invoice from your last purchase";
	    $pm->isHTML(true);
	    $pm->send();
    	echo "Mail Sent";
	}catch (Exception $e){
	    echo "Failed ".$pm->ErrorInfo;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST">
		<input type="submit" value="submit">
	</form>
</body>
</html>