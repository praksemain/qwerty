<?php
if (isset($_POST["submit1"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phoneNumber'];
    $message = $_POST['message'];
    $from = 'Mainark.lv kontaktforma';
    $to = 'jurmalina68@inbox.lv';
    $subject = 'Jauna ziņa';

    $body = "No: $name\n Kontakttālrunis: $phonenumber\n E-pasts: $email\n Ziņa:\n $message";

    if (!$_POST['name']) {
        $errName = 'Lūdzu ievadiet savu vārdu!';
    }

    if (!$_POST['phoneNumber']) {
        $errPhoneNumber = 'Lūdzu ievadiet derīgu kontakttālruni!';
    }

    if (!$_POST['email']) {
        $errEmail = 'Lūdzu ievadiet derīgu e-pasta adresi!';
    }

    if (!$_POST['message']) {
        $errMessage = 'Lūdzu ievadiet ziņu!';
    }

    if (!$errName && !$errPhoneNumber && !$errEmail && !$errMessage) {
        if (mail($to, $subject, $body, $from)) {
            $result = '<div class="alert alert-success">Ziņa ir nosūtīta!</div>';
        }
    }
}

