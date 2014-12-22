<?php

include('connect.inc');
db_connect();

//require_once('PHPMailer/class.phpmailer.php');
require "PHPMailer/PHPMailerAutoload.php";
$mail = new PHPMailer;


if (isset($_POST['emailforgot'])) {
    echo 'ovde';
    $email = $_POST['emailforgot'];
    $query = "select * from users where email='$email'";
    echo 'proslo';
    $result = mysql_query($query);
    $count = mysql_num_rows($result);
    // If the count is equal to one, we will send message other wise display an error message.
    if ($count == 1) {
        $rows = mysql_fetch_array($result);
        $pass = $rows['password']; //FETCHING PASS
        //echo "your pass is ::".($pass)."";
        $to = $rows['email'];
        //echo "your email is ::".$email;

////$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'DC01.Alti.lokal';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'djordje.radivojevic@alti';                 // SMTP username
        $mail->Password = 'sifra';                           // SMTP password
//        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25 ;                                    // SSL port to connect to

        $mail->From = 'djordje.radivojevic@alti';
        $mail->FromName = 'Alti';
        $mail->addAddress($to);                               // Add a recipient
        $mail->addReplyTo('djordje.radivojevic@alti', 'Information');
        $mail->addCC('djordje.radivojevic@alti.rs');
//        $mail->addBCC('bcc@example.com');

//        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Password recovery';
        $mail->Body = "Alti password recovery Script
        -----------------------------------------------
        Email Details is : $to;
        Here is your password  : $pass;
        Sincerely,
        Alti";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    } else {
        if ($_POST ['email'] != "") {
            echo "<span style='color: #ff0000;'> Not found your email in our database</span>";
        }
    }
    
}else{
    echo 'Nema takvog usera';
}

