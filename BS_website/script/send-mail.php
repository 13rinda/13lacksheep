<?php
error_reporting(0);

require "../plugins/phpmailer/PHPMailerAutoload.php";

if (!empty($_POST['name']) && !empty($_POST['mailto']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
   try{
      $result  		= array();
		$mailto 			= $_POST['mailto'];
		$mailfrom 		= $_POST['mailfrom'];
		$name 			= $_POST['name'];
		$mailto 			= $_POST['mailto'];
      $subject 		= $_POST['subject'];
      $detailMesage	= $_POST['message'];
      $mail    		= new PHPMailer;
      $mail->isSMTP();     
		
		// Set mailer to use SMTP
      $mail->Host       = 'smtp.gmail.com'; // Specify main and backup SMTP servers
      $mail->SMTPAuth   = true; // Enable SMTP authentication
      $mail->Username   = 'rovertest13@gmail.com'; // SMTP username
      $mail->Password   = 'RoverF@iry13'; // SMTP password
      $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
      $mail->Port       = 465;    

      //Recipients
      $mail->setFrom('sentfromemail', 'Eamil Heading');
		$mail->addAddress($mailto);     // Add a recipient
		
		$messages = "";
		if($subject != 'Reservation Request'){
			$messages .= "[Contact Info] Mail from ".$name." : ".$mailfrom."<br><br>";
		}
		$messages .= $detailMesage;

      //Content
      $mail->isHTML(true); // Set email format to HTML
      $mail->Subject = $subject;
		$mail->Body    = $messages;
		
      if($mail->send()){
			$emailType = ($subject == 'Reservation Request') ? "Reservation" : "Email";
         $result['message'] = $emailType." Send Successfully";
         $result['code']=1;
      }
      else{
         $result['message'] = "Message could not be sent. Mailer Error";
         $result['code']=0;
      }
   }
   catch(PDOException $e){
      $result['message'] = "There is some problem" . $e->getMessage();
		$result['code']=0;
   }
   echo json_encode($result);
}
?>