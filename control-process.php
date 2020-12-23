<?php

require 'clean.php';

if($_SERVER["REQUEST_METHOD"]=="POST"):
if(isset($_POST['login'])):
    $em = clean($_POST['email']);
    $pass = md5(clean($_POST['pass']));

        $xx = $conn->query("SELECT * FROM `dadmin` WHERE demail='$em' AND dpass='$pass'");
        if($xx->num_rows>0){
            $vx = $xx->fetch_assoc();
            $_SESSION['cream']=true;
            $_SESSION['rixy']=$vx['daid'];                
                header("Location: dashboard");                 
        }else{
            $_SESSION['msg'] = 'Oops! try again later';
            header("Location: control");
        }
    


endif;
endif;