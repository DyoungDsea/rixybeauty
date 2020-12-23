<?php
require 'clean.php';

if($_SERVER['REQUEST_METHOD']=="POST"){    

    if(isset($_POST['log'])){
        
    $web = clean($_POST['web']);
    $phone = clean($_POST['phone']);
    $email = clean($_POST['email']);
    $address = clean($_POST['address']);

    $sql = $conn->query("UPDATE dsettings SET dweb='$web', dphone='$phone', demail='$email', daddress='$address' ");
        if($sql){
        $_SESSION["msgs"]= "Updated successfully!";
        }else{
        $_SESSION["msg"]= "Sorry!...try again later!";
        }
    }
  
    header("Location:settings");
}