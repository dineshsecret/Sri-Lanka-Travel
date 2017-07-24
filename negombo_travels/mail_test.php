<?php 
$to  				= 'ruwan.ferdy@gmail.com ';
					$subject 			= 'Negombo Tours Contact Us';
					// message
					$message = "welcome";
							$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					
					// Additional headers
					//$headers .= "To: Managing Director UK <gayan@holidayceylon.com>" . "\r\n";
					$headers .= "From: Negombo Tours Web contact us Inquiry<$txt_email>" . "\r\n";
					//$headers .= 'Cc: sheron23jan@yahoo.com' . "\r\n";
							
					// Mail it
					mail($to, $subject, $message, $headers);
					$_SESSION['success']='Thanks for contact Negombo Tours';
					header("Location:contact_us.php");
					?>