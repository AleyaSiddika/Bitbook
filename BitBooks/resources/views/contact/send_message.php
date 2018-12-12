<?php
//echo "<pre>";
//print_r($_POST);
//die();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$info = $_POST['message'];



$message = '<html><body>';
$message .= '<h3 style="color:black; ">' . "E-mail: " . "$email".'</h3>';

$message .= '<p style="color:#080; font-size: 18px; "><br/>'. "$info".'</p>';

$message .= '<h3 style="color:black; ">'. "Name: ". "$name".'</h3>';
$message .= '<h3 style="color:black; ">'."Phone: ". "$phone".'</h3>';

$message .= '</html></body>';


$headers = "Form: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: " . strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$isSuccess = mail('oshitsd99@gmail.com', 'Residential Security and Access', $message, $headers);
if($isSuccess){
    return redirect('/Contact');
}
else{
    return redirect('/Contact');
}
?>


<!---->
<!---->
<?php
//$field_name = $_POST['name'];
//$field_email = $_POST['email'];
//$field_phone = $_POST['phone'];
//$field_message = $_POST['message'];
//
//$mail_to = 'oshitsd99@gmail.com';
//$subject = 'Message from a site visitor '.$field_name;
//
//$body_message = 'From: '.$field_name."\n";
//$body_message .= 'E-mail: '.$field_email."\n";
//$body_message .= 'Phone: '.$field_phone."\n";
//$body_message .= 'Message: '.$field_message;
//
//$headers = 'From: '.$field_email."\r\n";
//$headers .= 'Reply-To: '.$field_email."\r\n";
//
//$mail_status = mail($mail_to, $subject, $body_message, $headers);
//
//if ($mail_status) { ?>
<!--    <script language="javascript" type="text/javascript">-->
<!--        alert('Thank you for the feedback.');-->
<!--        window.location = '/Send_message';-->
<!--    </script>-->
<!--    --><?php
//}
//else { ?>
<!--    <script language="javascript" type="text/javascript">-->
<!--        alert('Something went wrong. Please try again later');-->
<!--        window.location = '/Send_message';-->
<!--    </script>-->
<!--    --><?php
//}
//
//?>
