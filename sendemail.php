<?php require_once dirname (__FILE__) . "/config/connection.php"; 

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	// Include librari phpmailer
	include('assets/phpmailer/Exception.php');
	include('assets/phpmailer/PHPMailer.php');
	include('assets/phpmailer/SMTP.php');

date_default_timezone_set("Asia/Bangkok");


if (isset($_POST['submit']))
{


	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	
			//Awal Email
	
	$emailBody =
    "Dear Bos
	<br/><br/>
	
	Anda mendapat email dengan data sebagai berikut :
	<br/><br/>
	Nama : <b>$name</b>
	<br/>
	Email : <b>$email</b>
	<br/>
	Pesan : <b>$message</b>
	<br/><br/>
	
	Mohon dikonfirmasi email tersebut
	<br/>
	
	<br/>
	<br/><br/>

	Best Regards,<br/>
	Admin - SamaSamaKreasi";
	
	$mail = new PHPMailer;
	$mail->isHTML(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'no.reply.the.mail.check@gmail.com'; // Email Pengirim
    $mail->Password = 'noreply123'; // Isikan dengan Password email pengirim
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
		)
		);
    //$mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
    $mail->setFrom('no.reply.the.mail.check@gmail.com', '');
    $mail->addAddress('no.reply.the.mail.check@gmail.com', '');
    //$mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
    // Load file content.php

    $mail->Subject = $subject;
    $mail->Body = $emailBody;
	$send = $mail->send();
	
	
	//Akhir EMail
	
	mysqli_query($con, "insert into tb_email (fname, femail, fsubject, fbody, fstatus, fdatetime_modified) values ('$name', '$email', '$subject', '$message', 'sent', now())");
	
	
	
	echo "<script>alert('Pesan anda telah dikirim!');window.location='index.php'</script>";
	
}

?>