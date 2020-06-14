<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $body = $_POST['body'];

        $subject = "You have received an E-mail from ".$name;
        $mailTo = "utkarsh.sinha.1106@gmail.com";
        $headers = "From: ".$email;
        $txt = "Message: ".$body;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html");
    }
?>