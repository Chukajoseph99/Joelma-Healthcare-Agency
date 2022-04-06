<?php

 $post = $_POST;

 $action = $_GET['action'];

 

if($action=="audit"){

		 $subject = 'Joelma Health Care';

		 $message = "<font color='#0066FF'><p>Hi,</p>

		<p> A new Contact details with his/her information below :</p>

		<p>Name: ".$post['Name']."</p>

		<p>Email: ".$post['Email']."</p>

		<p>Telephone: ".$post['Phone']."</p>

		<p>Message: ".$post['Enquiry']."</p>
		
		<p>From<br />".$post['Name']."</p>

		</font>";

		$url = 'thankyou.html';

		$btnname= 'auditbtn';

		$value = 'Submit';

		$adminemailid = 'thelma.oba@joelma.co.uk';
		//$adminemailid = 'dip.fourtunedesign@gmail.com';
		
		$headers = "From: ".$post['Name']."  <".$post['Email'].">\r\n" . 
       "Reply-To: ".$post['Email']." <".$post['Email'].">\r\n" .
       'X-Mailer: PHP/' . phpversion();

  $headers .= "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		$email = mail($adminemailid,$subject,$message,$headers);
		if($email)
		{
			header('Location: '.$url);
		}

}

?>