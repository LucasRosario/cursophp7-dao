<?php 

require_once("vendor/autoload.php");


use Rain\Tpl;

//config
$config = array(
	"tpl_dir"	=> 	"tpl/",
	"cache_dir"	=>	"cache/",
	//"tpl_dir"	=>	true,// set to false to improve the speed
);

Tpl::configure( $config );

$tpl = new Tpl;

// assing variable
$tpl->assign("name","Hcode");
$tpl->assign("version",PHP_VERSION);
//Assing a


$html = $tpl->draw("index", true);


//Import PHPMailer classes into the global namespace
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;


//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'luketask8@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'b@vi32126854';

//Set who the message is to be sent from
$mail->setFrom('luketask8@gmail.com', 'Lucas Rosario');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('lucasrosario1@hotmail.com', 'Rosario Lucas');

//Set the subject line
$mail->Subject = 'Testando a classe PHPMailer com Gmail';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($html);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

?>