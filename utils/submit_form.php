<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'HeJialin2002@gmail.com';
    $subject = 'New Message from Website Contact Form';
    $headers = 'From: ' . $email;
    $body = 'You have received a new message from your website contact form.'."\n\n".
            'Here are the details:'."\n\n".
            'Name: '.$name."\n".
            'Email: '.$email."\n".
            'Message:'."\n".$message;

    if (mail($to, $subject, $body, $headers)) {
        echo 'Message Sent Successfully!';
    } else {
        echo 'Message Not Sent!';
    }
?>
