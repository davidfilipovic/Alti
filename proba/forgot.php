<?php

include('connect.inc');
db_connect();

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;


if (isset($_POST['emailforgot'])) {
    echo 'ovde';
    $email = $_POST['emailforgot'];
    $query = "select * from users where email='$email'";
    $result = mysql_query($query);
    $count = mysql_num_rows($result);
    // If the count is equal to one, we will send message other wise display an error message.
    if ($count == 1) {
        $rows = mysql_fetch_array($result);
        $pass = $rows['password']; //FETCHING PASS
        //echo "your pass is ::".($pass)."";
        $to = $rows['email'];
        //echo "your email is ::".$email;
//        //Details for sending E-mail
//        $from = "djordje.radivojevic@alti.rs";
//        $url = "http://www.alti.rs.com/";
//        $body  =  "Password recovery Script
//        -----------------------------------------------
//        Url : $url;
//        email Details is : $to;
//        Here is your password  : $pass;
//        Sincerely,
//        Coding Cyber";
//        $from = "aspides@gmail.com";
//        $subject = "Password recovered";
//        $headers1 = "From: $from\n";
//        $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
//        $headers1 .= "X-Priority: 1\r\n";
//        $headers1 .= "X-MSMail-Priority: High\r\n";
//        $headers1 .= "X-Mailer: PHP/".phpversion();
//        $sentmail = mail ( $to, $subject, $body, $headers1 );
//        
//        /* 
////$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'user@example.com';                 // SMTP username
        $mail->Password = 'secret';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->From = 'from@example.com';
        $mail->FromName = 'Mailer';
        $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
        $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Here is the subject';
        $mail->Body = 'This is the HTML message body <b>in bold!</b>';
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
    //If the message is sent successfully, display sucess message otherwise display an error message.
    if ($sentmail == 1) {
        echo "<span style='color: #ff0000;'> Your Password Has Been Sent To Your Email Address.</span>";
    } else {
        if ($_POST['email'] != "")
            echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
    }
}
?>
