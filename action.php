<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
$Name = $_POST['Name'];
$email  = $_POST['Email'];
$phone =$_POST['Phone'];



//Save visitor name and entered message into one variable:
$formcontent="Name: $Name \r\n Email: $email \r\n Phone: $phone\r\n ";
$recipient = "hansaatravels@gmail.com";
$headers .= "BCC: thunga.manjunatha@gmail.com\r\n";
$subject = "Inquiry from Website";
$mailheader = "From: $email\r\n";
$mailheader .= "Reply-To: $email\r\n";
$mailheader .= "MIME-Version: 1.0\r\n";
$mail=mail($recipient, $subject, $formcontent, $mailheader);
if($mail)
	{?><script>alert('Thank you for contacting us');
	  window.location.href='by_road2.html';
	</script>

	<?php }
else
{
{?><script>alert('Cannot send mail');
	  window.location.href='by_road.html';
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