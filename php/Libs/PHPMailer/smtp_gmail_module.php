<?php

namespace ongameuk\php\Libs\PHPMailer;

use ongameuk\php\Libs\PHPMailer\PHPMailer;
use ongameuk\php\Libs\PHPMailer\SMTP;
use ongameuk\php\Libs\PHPMailer\Exception;

class smtp_gmail_module {

	public static function send_mail($smtp_gmail_config)
	{
		//----------------------------------------------------
		if (!empty($smtp_gmail_config['From_email'])
		and !empty($smtp_gmail_config['From_login_email'])
		and !empty($smtp_gmail_config['Password'])
		and !empty($smtp_gmail_config['FromName'])
		and !empty($smtp_gmail_config['To_email'])
		and !empty($smtp_gmail_config['To_name'])
		and !empty($smtp_gmail_config['Subject'])
		and !empty($smtp_gmail_config['Body'])
		)
		{
			error_reporting(0);
			
			$mail = new PHPMailer();
			
			$mail->CharSet = 'utf-8';
			$mail->IsSMTP();
		//	$mail->SMTPDebug = 2;
			$mail->From = $smtp_gmail_config['From_email'];
			$mail->FromName = $smtp_gmail_config['FromName'];
			$mail->Host = 'mail.privateemail.com';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;
			$mail->SMTPAuth = true;
			$mail->Username = $smtp_gmail_config['From_login_email'];
			$mail->Password = $smtp_gmail_config['Password'];
			$mail->AddAddress($smtp_gmail_config['To_email'],$smtp_gmail_config['To_name']);
			//$mail->AddReplyTo('name@gmail.com','Reply Name');
			$mail->WordWrap = 50;
			
			$mail->IsHTML(true);
			$mail->Subject = $smtp_gmail_config['Subject'];
			$mail->Body = $smtp_gmail_config['Body'];
			
			$status_send = $mail->Send();
			if ($status_send) { print 'send_msg'; }
			else
			{
				print 'error send:'.$mail->ErrorInfo;
				$error_send_mail = true; // trow error
			}
		}
		else return 'err_send_form';


	}

}

?>