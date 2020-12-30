<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rohan007008009@gmail.com';                 // SMTP username
$mail->Password = 'kyaeeurfqujjjoce';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('rohan007008009@gmail.com', 'UPES-CSI');

$mail->addReplyTo('rohan007008009@gmail.com', 'UPES-CSI');

$mail->Debugoutput = 'html';

$mail->isHTML(true);                                  // Set email format to HTML

require 'config.php';
$que = mysql_query("SELECT * FROM `reg` WHERE `sent` = '0' LIMIT 10")or die("Cannot connect to database!");;

while ($row = mysql_fetch_array($que)) {
    $sap = $row[4];
    $name = $row[1];
    $email = $row[2];
    $contact = $row[3];
    $mail->addAddress($email, $name);
    $mail->Subject = 'CONFIRMATION MAIL';
    $mail->Body    = "Dear student,<br>
                          &emsp;&emsp;&emsp;&emsp;&emsp; &ensp; Thank you for registering with UPES-CSI. <br> 
                           <br> <br>
Details of the student:-<br>
Name:  $name<br>
Sap I'd:  $sap <br>
Phone Number:  $contact <br><br>


Yours sincerely<br>
UPES-CSI
";
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent to  : - ".$name."<br>";
        $sent = mysql_query("UPDATE `reg` SET `sent` = '1' WHERE sap = '".$sap."'");
    }
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
}

