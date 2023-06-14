
<meta http-equiv="refresh" content="2;URL= index.html">

<?
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "smtp.gmail.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "oguzhan.krakus@gmail.com";  // SMTP username
$mail->Password = "1286yusuf"; // SMTP password
$mail->CharSet = 'UTF-8';
$mail->Port = 465;
$mail->From     = "oguzhan.krakus@gmail.com"; // smtp kullanycy adynyz ile ayny olmaly
$mail->Fromname = "giden ismi";
$mail->AddAddress("oguzhan.krakus@gmail.com","Websitenizden gelen Sipariþiniz.");
$mail->Subject  =  $_POST['mail'];
$mail->Body     =  implode("  ",$_POST);
if(!$mail->Send())
{
   echo "Mesaj Gönderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo '<script type="text/javascript">alert("E Postanız  Başarı ile  Gönderilmiştir.");</script>';

?>
