<?php

//check whether on localhost or online
$localhost = array(
    '127.0.0.1',
    '::1'
);

if(in_array($_SERVER['REMOTE_ADDR'], $localhost)){
    $conn=new mysqli("localhost","root","","shoap");
}
else {
$conn=new mysqli("localhost","rixybeau_user","rixybeauty.com100@","rixybeau_database");//normal
}

if($conn->connect_error){
    die($conn->connect_error);
}

date_default_timezone_set("Africa/Lagos");

    $created_at=date("Y-m-d H:i:s");
    $website="http://www.buyandbet.com";
    // $mail_limit=50;
?>