<?php

    include ("index.html");

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        $to = 'jimmyopot@gmail.com';
        $subject = 'Form Submission';
        $message = "Name ".$name."\n"."Wrote the following: "."\n\n".$msg;
        $headers = "From: ".$email;

        if (mail($to, $subject, $message, $headers)) {
            echo "<h1>Sent Successfully! Thank you"." ".$name.", I'll contact you ASAP...</h1>";
        }
        else {
            echo "Message not sent, please try again!";
        }
    }

?>