<?php
require 'clean.php';

if($_SERVER['REQUEST_METHOD']=="POST"){    

    if(isset($_POST['log'])){
        
    $message = clean($_POST['message']);
    $name = clean($_POST['name']);
    $mail = clean($_POST['mail']);
    $email = clean($_POST['email']);
    $subject = clean($_POST['subject']);

    $subject="Web Enquiry from - ".$name;
    $details="Sender: ".$name."\n"."Email Address: ".$email."\n\n".$message;
    if($_POST['code']===$_POST['hide']){
        if(mail($mail, $subject, $details, "From: $email")){
        $_SESSION["msgs"]= "Your message was delivered successfully!";
        }else{
        $_SESSION["msg"]= "Sorry!...Message could not be sent!";
        }
    }
  
    }

    header("Location:contact");
}