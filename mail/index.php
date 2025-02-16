<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require __DIR__."/vendor/autoload.php";

    $faker =  \Faker\Factory::create("tr_TR");

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.google.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'soucius.kaenj@gmail.com';                     //SMTP username
        $mail->Password   = '';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('soucius.kaenj@gmail.com', 'sou.com');
        $mail->addAddress('soucius.shopping@gmail.com', 'Soucius Shopping');     //Add a recipient
        $mail->addAddress('soucius.ggwp@gmail.com', 'Soucius GG');               //Name is optional
        $mail->addReplyTo('soucius.kaenj@gmail.com', 'sou.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $faker->text(10);
        $mail->Body    = $faker->text(200);
        $mail->AltBody = $faker->text(20);

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
