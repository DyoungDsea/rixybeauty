<?php
require 'clean.php';

$userid = $_SESSION['rixy'];

if($_SERVER['REQUEST_METHOD']=="POST"){    

    if(isset($_POST['log'])){
        // die();
    $old = md5(clean($_POST['old']));
    $pass = md5(clean($_POST['pass']));
    $cpass = md5(clean($_POST['cpass']));

    $pal = $conn->query("SELECT * FROM dadmin WHERE dpass='$old'");
            if($pal->num_rows>0){
                if($pass === $cpass){
                    $sql = $conn->query("UPDATE dadmin SET dpass='$pass' WHERE daid='$userid'");
                    if($sql){
                    $_SESSION["msgs"]= "Updated successfully!";
                    }else{
                    $_SESSION["msg"]= "Sorry!...try again later!";
                    }
                }
            }else{
                $_SESSION["msg"]= "Sorry!...Password do not match!";
            }

    }
  
    header("Location:change-password");
}