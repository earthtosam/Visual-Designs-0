<?php
    if(isset($_POST['submit'])){
        $email=$_POST['email'];

        $mailTo='worldlycomet@yahoo.com';
        $subject='Visual Designs Website Newsletter Submission';
        $message="Email: ".$email;
        $headers="From: worldlycomet@hotmail.com";

        if(mail($mailTo, $subject, $message, $headers)){
            header('Location: blog');
        }
        else{
            header('Location: message-error');
        }
    }
?>