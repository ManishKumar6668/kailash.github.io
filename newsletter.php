<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
$Name = $_POST['Name'];
$email  = $_POST['Email'];



//Save visitor name and entered message into one variable:
$formcontent="Name: $Name \r\n Email: $email \r\n ";
$recipient = "hansaatravels@gmail.com";
$headers .= "BCC: thunga.manjunatha@gmail.com\r\n";
$subject = "Newsletter Subscription from Website";
$mailheader = "From: $email\r\n";
$mailheader .= "Reply-To: $email\r\n";
$mailheader .= "MIME-Version: 1.0\r\n";
$mail=mail($recipient, $subject, $formcontent, $mailheader);
if($mail)
	{?><script>alert('Your Subscription is successfull.');
	  window.location.href='index.html';
	</script>

	<?php }
else
{
{?><script>alert('Cannot send mail');
	  window.location.href='index.html';
	</script>

	<?php }

}
}else {
	{?><script>alert('Cannot send mail');
		  window.location.href='index.html';
		</script>
	
	<?php }

	
	}
?>