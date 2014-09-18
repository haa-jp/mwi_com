<?php
/*
$subject = "Irrigation Inquiry";
$fields = Array();

  $fields['name'] = $_POST['name'];
  $fields['email'] = $_POST['email'];
  $fields['address'] = $_POST['address'];
  $fields['city'] = $_POST['city'];
  $fields['state'] = $_POST['state'];
  $fields['zipcode'] = $_POST['zipcode'];
  $fields['notes'] = $_POST['notes'];
  
  $fields['timestamp'] = date('r');
  
$message = 'Developing new Irrigation Form for Dustin\'s website \n';
$message .='We have received a request for our irritagtion web site: \n ';

foreach ($fields as $key=>$value) {
        $message .= ucfirst($key) . ': ' . htmlentities($value) . '<br />';
}
// form details

//$to = 'dustin@midwestirrigationmn.com';
$to = 'thatjpguy@gmail.com';
$from = 'no-reply@jaguschlawncare.com';
$mail_daemon=mail($to, $from, $subject, $message);  
    
if($mailer_deamon) {
	echo "We'll get back to you soon";
} else {
	echo "Thankks! We'll get back to you soon";
}
*/



date_default_timezone_set('America/Chicago');
require_once('class.phpmailer.php');
require_once('class.smtp.php');

$fields = Array();

$fields['name'] = $_POST['name'];
$fields['email'] = $_POST['email'];
$fields['phone'] = $_POST['phone'];
$fields['address'] = $_POST['address'];
$fields['city'] = $_POST['city'];
$fields['state'] = $_POST['state'];
$fields['zipcode'] = $_POST['zipcode'];
$fields['notes'] = $_POST['notes'];
$fields['timestamp'] = date('r');

$message = '<h3>We have received a contact request from the Midwest Irrigation web site. </h3>' .'<hr/>';
$message .= '<table border=0 pacding=10>';

foreach ($fields as $key=>$value) {
       $message .= '<tr><td><b>'.ucfirst($key) .'</b></td><td> ' . htmlentities($value) . '</td></tr>';
}
$mesage .= '</table>'; 

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "localhost";
//$mail->AddAddress('thatjpguy@gmail.com','Midwest Irrigation');
$mail->AddAddress('dustin@midwestirrigationmn.com','Midwest Irrigation');
$mail->SetFrom('no-reply@midwestirrigationmn.com','Midwest Irrigation');
$mail->AddReplyTo('no-reply@midwestirrigationmn.com');
$mail->Subject = 'Irrigation Contact Request';
$mail->IsHTML(true);
$mail->Body = $message;

if (!$mail->Send()) {
	echo "message was not sent";
	echo 'Mailer error: ' . $maail->ErrorInfo;
} else {
	header("location: http://www.midwestirrigationmn.com/contact-us/thank-you/");  
}
//        $url = 'http://192.168.1.1:89/ws/lostsale.php';
//        $data = array('itemNumber' => $fields['code'], 'quantity' => $fields['quantity']);
//
//        $options = array(
//            'http' => array(
//                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//                'method'  => 'POST',
//                'content' => http_build_query($data),
//            ),
//        );
//        $context  = stream_context_create($options);
//        $result = file_get_contents($url, false, $context);
//
//        header('Content-type: application/json');
//        echo '{"message":"Message sent"}';
//}
?>