<?php
$to = "anita@ivemadeit.com";
//$to = "contactme@anitamourya.com";
$msgResp = '';
if(isset($_POST['mainSubmit'])) {
	include_once 'includes/phpmailer/PHPMailerAutoload.php';
	extract($_POST);

	$oname = "Anita Sachdev";
	$subject = "You got an enquiry - Contact Us";
	$message = '';
	$message .= 'Name : '.$name."<br>";
	$message .= 'Email : '.$email."<br>";
	$message .= 'Phone : '.$phone."<br>";
	$message .= 'Message : '.$msg."<br>";
	

	$message = trim($message);

	//Create a new PHPMailer instance
	$mail = new PHPMailer;

	/*$mail->IsSMTP();
	$mail->SMTPAuth   = true;
	$mail->Host       = "mail.yourdomain.com";
	$mail->Port       = 26; 
	$mail->Username   = "yourname@yourdomain";
	$mail->Password   = "yourpassword";      */

	$mail->setFrom($email);
	$mail->addReplyTo($to);//,$oname
	$mail->addAddress($to);
	$mail->Subject = $subject;
	$mail->msgHTML($message);
	$mail->AltBody = $message;
 
	if(!$email && $message && $name) {
		$msgResp =  "Please enter required fields";
	} else {
		if (!$mail->send()) {
			$msgResp =  "Mailer Error: " . $mail->ErrorInfo;
		} else {
			$msgResp =  "Email Sent Successfully!";
		}
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>'I've Made It' | Contact Us</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="I've made it, Ive made it, I made it, I have made it, training for success, made it, made, success, coaching, personalize success, career change, newcomers, entrepreneurs, rejoining workforce, lunch and learn, corporate training, keynote speaker, life skills coaching, learn to make it, training philosophy, training benefits, proactive habit, you factor, organic success, Interpreter of Success, Made it, I made it, eastern roots, ancient wisdom, innate wisdom, self realization, consciousness, diversity, understanding diversity, compassionate communication, Your DNA of SUccess, thinking styles, learning styles,innovative learning experiences, competitive edge, effectiveness edge,sustainable training,charting future, manifesting success, uniqueness, feel special, project training, manager training, yoga, whole brain thinking, stress, self image,success beliefs, success styles, success wisdom, success knowledge,success habits, success action, DNA, DNA Map, SMART GOALS, self help, speaker, meditation, motivational speaker, self-help guru, get the edge, daily inspiration, customized strategies, Anita Sachdev, Anita, Sachdev," />
	<meta name="description" content="�I�ve Made It� is Training and Education Organization that provides content and methods for enhancing performance to personalize success experiences at work and in life. Train for Success with Anita Sachdev" />
	<meta name="author" content="Virtuoso Designs. http://www.virtuoso.ca" />
	<meta name="copyright" content="� 2007 I've Made It" />
	<meta name="publisher" content="Virtuoso Designs. http://www.virtuoso.ca" />
	<meta name="abstract" content="I've Made It website" />
	<meta name="robots" content="index, follow" />
	<meta name="distribution" content="global" />
	<meta name="revisit-after" content="2 days" />
	<meta name="content-language" content="en" />
	<link rel="stylesheet" type="text/css" href="css/default.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body class="home">
	<div id="container">
		<h1>'I've Made It'</h1>
		<div id="accessibilitylinks">
			<h3>Accessibility</h3>
			<hr />
		</div>
		<div id="container-left"></div>
		<div id="container-center">
			<div id="header">
				<?php include('includes/sm.php'); ?>
			</div>
			<div id="wrapper">
				<h3 class="hide">Navigation</h3>
				<!--//Navigation-->

				<?php include('includes/nav.php'); ?>
				<div id="advert">
					<div id="adv-left">
						<h3 class="high1" style="padding: 13px 10px 23px 0;">Contact Us</h3>
						<!-- <h5 class="high1">Know us More</h5> -->
					</div>
					<div id="adv-right" style="background-color: #fff;background-image: none;">
						<img src="images/bannerTop/contact_us.jpg">
					</div>
				</div>
				<div id="content">
					<h3 class="breadcrumb">Home > Contact Us</h3>
					<div id="content-left">
						<!--//Core values-->
						<div id="core-values">
							<!-- <h3>Contact Us</h3> -->
							<form class="ccc contactForm" method="post" name="ccc" action="">
								<div style="text-transform: capitalize; font-size: 12px;"><?php echo $msgResp;?></div>
								<label>Name :</label>
								<input type="text" name="name" required="">
								<label>Email :</label>
								<input type="email" name="email" required="">
								<label>Mobile :</label>
								<input type="text" name="phone" required="">
								<label>Your Message :</label>
								<textarea name="msg" required=""></textarea>
								<input type="submit" name="mainSubmit" class="csubmit" value="Submit">
							</form>
						</div>
					</div>
					<div id="content-right">
						<p>
							<!-- <h3>Contact Us</h3> -->
							<h3>Anita Sachdev<br />Director</h3>
							<div></div>
							<table width="450" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td width="250" valign="top">
										<label style="color: #002060;">Email:</label> 
										<a class="darker" href="mailto:anita@ivemadeit.com" title="Email">
											anita@ivemadeit.com
										</a><br /><br />
										<label style="color: #002060;">Mobile:</label> <a class="darker">+91 96190 19066</a><br />
									</td>
									<td width="250" valign="top">
										<label style="color: #002060;">Website:</label> <a class="darker" href="http://www.ivemadeit.com">www.ivemadeit.com </a> </br><br />
										<label style="color: #002060;">Skype:</label> <a class="darker" href="skype:call?anita.ivemadeit.com">anita.ivemadeit.com</a> </br>
									</td>
								</tr>
							</table>
							<table width="450" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td width="250" valign="top">
										<h4 style="color: #002060;">Primary Address</h4>
										<h4 style="color: #002060;font-size: 14px;">Mumbai</h4>
										Abhar, 309-C wing,<br />
										Seven Bungalows,<br />
										Off JP Road, Andheri West,<br />
										Mumbai 400061<br />
										<br />
									</td>
									<td width="250" valign="top">
										<h4 style="color: #002060;">Secondary Address</h4>
										<h4 style="color: #002060;font-size: 14px;">Canada</h4>
										2435 Stoll Dr. Oakville,<br />
										Ontario L6J 7K8,<br />
										Canada<br />
									</td>
								</tr>
							</table>
							<br />
							<br />
						</p>
					</div>
				</div>
			</div>
			<!--//Footer-->
			<?php include('includes/footer.php'); ?>
			<div id="disclaimer">
				<h3 class="hide">Disclaimer</h3>
			</div>
		</div>
		<div id="container-right">
			<!--//Latest News-->
			<?php include('includes/right-sidebar.php'); ?>
			<!--   <a href="news.html" id="morenews"><span>More News</span></a><!--//Company Details-->
			<h3 class="hide">Company Details</h3>
		</div>
		<div class="cleaner"></div>
	</div>
</body>
</html>