<?php
if (isset($_POST["submit1"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phoneNumber'];
    $message = $_POST['message'];
    $from = 'Jauna ziņa';
    $to = 'info@mainark.lv';
    $subject = 'Jauna ziņa - Mainark.lv kontaktforma';

    $body = "No: $name\n\nKontakttālrunis: $phonenumber\n\nE-pasts: $email\n\nZiņa:\n\n$message";

    if (!$_POST['name']) {
        $errName = 'Lūdzu ievadiet savu vārdu!';
    }

    if (!$_POST['phoneNumber'] || preg_match("^[0-9]+$",$phonenumber)) {
        $errPhoneNumber = 'Lūdzu ievadiet derīgu kontakttālruni!';
    }

    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Lūdzu ievadiet derīgu e-pasta adresi!';
    }

    if (!$_POST['message'] || strlen($message)>1000) {
        $errMessage = 'Lūdzu ievadiet ziņu!';
    }

    if (!$errName && !$errPhoneNumber && !$errEmail && !$errMessage) {
        if (mail($to, $subject, $body, $from)) {
            $result = '<div class="alert alert-success">Ziņa ir nosūtīta!</div>';
        }
    }
}

