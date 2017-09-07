<?php
$to = "anita@ivemadeit.com";
//$to = "contactme@anitamourya.com";
$msgResp = '';
if(isset($_POST['submit'])) {
	include_once 'phpmailer/PHPMailerAutoload.php';
	extract($_POST);

	$oname = "Anita Sachdev";
	$subject = "You got an enquiry";
	$message = '';
	$message .= 'Name : '.$name."<br>";
	$message .= 'Email : '.$email."<br>";
	$message .= 'Phone : '.$phone."<br>";
	$message .= 'I would like to be Coached on : '.$coach."<br>";
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
		//send the message, check for errors
		if (!$mail->send()) {
			$msgResp =  "Mailer Error: " . $mail->ErrorInfo;
		} else {
			$msgResp =  "Email Sent Successfully!";
		}
	}

}
?>

<!-- <h3 class="offer">Our Best Offer</h3> -->
<h3 class="hugh"><center>Experience the fiercely liberating power<br> of a Coaching Session with Anita</center></h3>
<p class="para"><i><b>Ask for your <e style="color: #ff7e00;">FREE</e> real-time Empower Session NoW!</b></i></p>
<p class="para">The coaching experience offers a rare opportunity to stand back and take a fresh look at the practices and assumptions of a lifetime. Coaching reaffirms that <i>believing in yourself</i> is one of the most powerful choices you can make!</p>
<h3 class="hugh">Take the Courage to be coached. And the possibility to change your world forever</h3>
<form class="ccc" method="post" name="ccc" action="">
   <div style="font-size: 12px;color: #fff;"><?php echo $msgResp;?></div>
   <label>Name :</label>
   <input type="text" name="name" required="">
   <label>Email :</label>
   <input type="email" name="email" required="">
   <label>Mobile :</label>
   <input type="text" name="phone" required="">
   <label>I would like to be Coached on :</label>
   <input type="text" name="coach" placeholder="e.g Career, communication, leadership, Cross Cultural" required="">
   <label>Your Message :</label>
   <input type="text" name="msg" required="">
   <input type="submit" name="submit" class="csubmit" value="Yes I need a Coach to Succeed">
</form>

<!-- <h3 class="latestnews">Latest News</h3>
   <dl class="latestnews first">
      <dt>
         <div align="center"> <img src="images/arrow_o.gif" align="absmiddle" width="11" height="14" /> Lunch and Learn</div>
      </dt>
      <dd>New 'Refreshing and Reflective’Series in Corporate Wellness, Critical  Communication, Diversity, Be your Own Guru.
      </dd>
   </dl>
   <dl class="latestnews first">
      <dt><img src="images/arrow_o.gif" align="absmiddle" width="11" height="14" /> Life Skills Coaching</dt>
      <dd><strong>~ Accepting Clients ~</strong> <br />
         If you are in transition and require creative solutions to FIT into a new job, relationship or country or require career directions, call Anita today!
      </dd>
   </dl>
   <dl class="latestnews first">
      <dt><img src="images/arrow_o.gif" align="absmiddle" width="11" height="14" /> Keynote Speaker</dt>
      <dd>Anita engages audiences with her thought provoking ideas and stories with her passion with compassion about the bold stance, ‘perhaps…we have already Made It’..
      </dd>
   </dl>
   <dl class="latestnews first">
      <dt><img src="images/arrow_o.gif" align="absmiddle" width="11" height="14" /> Idea Facilitation</dt>
      <dd>Anita creates possibilities with abilities to unleash your creativity e.g. to recreate the magic of your mission statement, or revitalize your brand or advertising campaign.  
      </dd>
   </dl>
   <p>
   </p>
 -->

<!-- <p class="para">The Coaching process and approach is unique. Differs from mentoring and counselling. The
benefits are unique:</p>
<ul class="rightside">
   <li>You access your ability to accomplish goals.</li>
   <li>Discover your innate drive and purpose</li>
   <li>Enhance self-awareness to address old problems through deep reflection</li>
   <li>Deep down inside, you know you can achieve anything</li>
   <li>You have faith, no matter what happens</li>
   <li>Take personal responsibility for your discovery and action</li>
   <li>Develop resilience in the present and direction for the future</li>
   <li>Gain clarity of perspective to breakthrough action</li>
</ul> -->