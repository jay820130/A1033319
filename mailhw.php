<html>
<head>
<title></title>
</head>
<body>
<form action="" method="POST">
請輸入您的收件人:<input type="text" name="hename" value="ex.123@gmail.com"></br>
請輸入您的寄件信箱:<input type="text" name="umail"></br>
請輸入您的姓名:<input type="text" name="uname" value="ex.Joanna"></br>
請輸入您的郵件內容:</br>
<textarea cols="100" rows="20" name="umessage"></textarea>
<input type="submit" value="送出資料">
</form>
<?php

if(isset($_POST["hename"])){


$hename=$_POST["hename"];
$uanme=$_POST["uname"];
$umessage=$_POST["umessage"];
require("PHPMailer/PHPMailerAutoload.php");

$mail=new PHPMailer();   //產生一個mail物件
$mail->SMTPDebug=1;
$mail->IsSMTP();  //telling the class to use SMTP
$mail->SMTPAuth=true;  //eable SMTP authentication
$mail->SMTPSecure = "ssl";
$mail->Host="smtp.gmail.com"; //set gmail as the SMTP server
$mail->Port=465;

$mail->Username=("firefox1937@gmail.com");
$mail->Password=("765481239");

$mail->CharSet="utf-8";
$mail->Subject="php期末報到A1033319";

$mail->From=("$umail");
$mail->FromName="$uanme";
$mail->IsHTML(True);

$mail->AddAddress("$hename","me");
$mail->Body="$umessage";
if(!$mail->send()){
	echo "Failed";
	echo "Mailer error:".$mail->ErrorInfo;
	exit;
}

   echo "Success";
}
?>
</body>
</html>