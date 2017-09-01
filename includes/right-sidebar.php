<?php
$to = "anita@ivemadeit.com";
//$to = "contactme@anitamourya.com";
   $msgResp = '';
if(isset($_POST['submit'])) {
   require 'phpmailer/PHPMailerAutoload.php';
   extract($_POST);

   $oname = "Anita Sachdev";
   $subject = "You got an enquiry";
   $message = '';
   $message .= 'Name : '.$name."<br>";
   $message .= 'Email : '.$email."<br>";
   $message .= 'Phone : '.$phone."<br>";
   $message .= 'I would like to be Coached on : '.$coach."<br>";
   $message .= 'Message : '.$msg."<br>";

   //Create a new PHPMailer instance
   $mail = new PHPMailer;
   //Set who the message is to be sent from
   $mail->setFrom($email);
   //Set an alternative reply-to address
   $mail->addReplyTo($to);//,$oname
   //Set who the message is to be sent to
   $mail->addAddress($to);
   //Set the subject line
   $mail->Subject = $subject;
   //Read an HTML message body from an external file, convert referenced images to embedded,
   //convert HTML into a basic plain-text alternative body
   $mail->msgHTML($message);
   //Replace the plain text body with one created manually
   $mail->AltBody = $message;

   //send the message, check for errors
   if (!$mail->send()) {
       $msgResp =  "Mailer Error: " . $mail->ErrorInfo;
   } else {
       $msgResp =  "Email Sent Successfully!";
   }

   /*$headers = "From: $email<br>";
   $headers .= "Reply-To: $email<br>";
   //$headers .= "Return-Path: myplace@here.com<br>";
   //$headers .= "CC: sombodyelse@noplace.com<br>";
   //$headers .= "BCC: hidden@special.com<br>";

   if ( mail($to,$subject,$message,$headers) ) {
      $msgResp = "The email has been sent!";
   } else {
      $msgResp = "The email has failed!";
   }*/

}
?>

<!-- <h3 class="offer">Our Best Offer</h3> -->
<h3 class="hugh">Experience the fiercely liberating power of a Coaching Session with me, Anita, ASAP!!</h3>
<p class="para"><i>Ask for your Free real-time Empower Session Right NoW!</i></p>
<p class="para">The coaching experience offers a rare opportunity to stand back and take a fresh look at the practices and assumptions of a lifetime. Coaching reaffirms that <i>believing in yourself</i> is one of the most powerful choices you can make!</p>
<h3 class="hugh">Take the Courage to be coached. And the possibility to change your world forever.</h3>
<form class="ccc" method="post" name="ccc" action="">
   <div><?php echo $msgResp;?></div>
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
   <input type="submit" name="submit" class="csubmit" value="Yes I need a Coach to Succeed.">
</form>


<style type="text/css">
   .ccc {
      font-size: 16px;margin: 15px;
   }
   .ccc label{
      display: block;
      padding: 5px 0;
   }
   .ccc .csubmit{
      border: 1px solid orange;
      color: #fff;
      background: orange linear-gradient(orange,#ff8c00);
      padding: 5px;
      margin: 10px 0;
   }
   .ccc input[type=text], .ccc input[type=email], .ccc textarea {
      background: #fff;
      border: 0;
      display: block;
      padding: 5px 0;
      width: 100%;
   }


   .offer {
      font-size: 22px;
      padding: 15px 0px 0px 15px;
      border: 0;
      color: #bd2129;
      font-weight: bold;
   }
   p.para{
      font-size: 13px;
      padding: 0px 14px;
      color: #e9e9e9;
   }
   h3.hugh{
      font-size: 16px;
      padding: 15px 14px 0px 14px;
      border: 0;
      font-weight: bold;
      color: #ff7e00;
   }
   ul.rightside {  }
   ul.rightside li {
      padding: 2px 5px 2px 15px;
      list-style-type: decimal;
      background: none;
      list-style-position: inside;
      color: #fff;
   }
</style>
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