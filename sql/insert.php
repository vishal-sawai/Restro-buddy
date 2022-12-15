<?php


// mail
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);

// Contact Form
if (isset($_POST['contactbtnsubmit'])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $cemail = $_POST["cemail"];
    $cphone = $_POST["cphone"];
    $msg = $_POST["msg"];

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'rjhostel.aurangabad@gmail.com';
        $mail->Password   = 'eonquskhtkbuwekx';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('rjhostel.aurangabad@gmail.com', 'Restro Buddy');
        $mail->addAddress('vishalsawai17252@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = 'Contact Us Message';
        $mail->Body    = "
            First Name :-  $fname <br>
            Last Name :-  $lname <br>
            email :-  $cemail<br>
            phone :-  $cphone<br>
            message :-  $msg<br>
            ";
        $mail->send();

?>
        <script>
            alert(" Your Message Sended");
            location.replace("../index.php");
        </script>
    <?php
    } catch (Exception $e) {
        echo "Otp could not be sent. Mailer Error: {$mail->ErrorInfo}";
    ?>
        <script>
            alert("Something Wrong");
            location.replace("../index.php");
        </script>
    <?php
    }
}

// Order
if (isset($_POST['allenbtnsubmit'])) {

    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $type = $_POST["type"];
    $address = $_POST["address"];

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'rjhostel.aurangabad@gmail.com';
        $mail->Password   = 'eonquskhtkbuwekx';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('rjhostel.aurangabad@gmail.com', 'Restro Buddy');
        $mail->addAddress('vishalsawai17252@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = 'Service Enquiry';
        $mail->Body    = "
            Full Name :-  $name <br>
            email :-  $email<br>
            phone :-  $phone<br>
            Service Type :-  $type<br>
            Address :-  $address<br>
            ";
        $mail->send();

    ?>
        <script>
            // alert(" Your Message Sended");
            location.replace("../thankyou.php");
        </script>
    <?php
    } catch (Exception $e) {
        echo "email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    ?>
        <script>
            alert("Something Wrong");
            location.replace("../index.php");
        </script>
<?php
    }
}
