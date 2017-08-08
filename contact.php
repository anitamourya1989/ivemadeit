<?php
$to = "contactme@anitamourya.com";
$msgResp = '';
if(isset($_POST['submit'])) {
   require 'includes/phpmailer/PHPMailerAutoload.php';
   extract($_POST);

   $oname = "Anita Sachdev";
   $subject = "You got an enquiry - Contact Us";
   $message = '';
   $message .= 'Name : '.$name."<br>";
   $message .= 'Email : '.$email."<br>";
   $message .= 'Phone : '.$phone."<br>";
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>'I've Made It' | Contact Us</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="keywords" content="I've made it, Ive made it, I made it, I have made it, training for success, made it, made, success, coaching, personalize success, career change, newcomers, entrepreneurs, rejoining workforce, lunch and learn, corporate training, keynote speaker, life skills coaching, learn to make it, training philosophy, training benefits, proactive habit, you factor, organic success, Interpreter of Success, Made it, I made it, eastern roots, ancient wisdom, innate wisdom, self realization, consciousness, diversity, understanding diversity, compassionate communication, Your DNA of SUccess, thinking styles, learning styles,innovative learning experiences, competitive edge, effectiveness edge,sustainable training,charting future, manifesting success, uniqueness, feel special, project training, manager training, yoga, whole brain thinking, stress, self image,success beliefs, success styles, success wisdom, success knowledge,success habits, success action, DNA, DNA Map, SMART GOALS, self help, speaker, meditation, motivational speaker, self-help guru, get the edge, daily inspiration, customized strategies, Anita Sachdev, Anita, Sachdev," />
    <meta name="description" content="‘I’ve Made It’ is Training and Education Organization that provides content and methods for enhancing performance to personalize success experiences at work and in life. Train for Success with Anita Sachdev" />
    <meta name="author" content="Virtuoso Designs. http://www.virtuoso.ca" />
    <meta name="copyright" content="© 2007 I've Made It" />
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
            <h3 class="hide">Header Links</h3>
            <a href="index.html" id="logo"><span>Return back to home</span></a>
            <ul id="headerlinks">
                <li><a href="individual.html" id="sitemap">coaching<br /> 
                    programs</a>
                </li>
            </ul>
            <ul id="headerlinksa">
                <li><a href="corporate.html" id="accessibility">corporate<br /> 
                    programs</a>
                </li>
            </ul>
        </div>
        <div id="wrapper">
           <h3 class="hide">Navigation</h3>
           <!--//Navigation-->

           <?php include('includes/nav.php'); ?>
           <div id="advert">
              <div id="adv-left">
                 <h3 class="high1">Contact Us</h3>
                 <h5 class="high1">Know us More</h5>
             </div>
             <div id="adv-right" style="background-color: #fff;background-image: none;">
                 <img src="images/career.jpg">
             </div>
         </div>
         <!--//Current opportunities-->
        <!--  <div id="opportunities">
          <h3><span></span></h3>
        </div> -->
<div id="content">
    <h3 class="breadcrumb">Home > Contact Us</h3>
    <div id="content-left">
        <!--//Core values-->
        <div id="core-values">
            <!-- <h3>Contact Us</h3> -->
            <form class="ccc contactForm" method="post" name="ccc" action="">
               <div><?php echo $msgResp;?></div>
               <label>Name :</label>
               <input type="text" name="name">
               <label>Email :</label>
               <input type="email" name="email">
               <label>Mobile :</label>
               <input type="text" name="phone">
               <label>Your Message :</label>
               <textarea name="msg"></textarea>
               <input type="submit" name="submit" class="csubmit" value="Submit">
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
                    <label style="color: #002060;">Email:</label> <a href="mailto:anita@ivemadeit.com" title="Email">anita@ivemadeit.com</a><br /><br />
                    <label style="color: #002060;">Mobile:</label> 96190 19066<br />
                </td>
                <td width="250" valign="top">
                    <label style="color: #002060;">Website:</label> <a href="http://www.ivemadeit.com">www.ivemadeit.com </a> </br><br />
                    <label style="color: #002060;">Skype:</label> <a href="skype:call?anita.ivemadeit.com">anita.ivemadeit.com</a> </br>
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