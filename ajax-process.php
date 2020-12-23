<?php

require("clean.php");
if($_SERVER['REQUEST_METHOD']=="POST"):
    if(isset($_POST['Message']) AND $_POST['Message']=="proDelete"){
        $cid = clean($_POST['id']);
        $img = clean($_POST['valueA']);
       $sql = $conn->query("DELETE FROM `dproducts` WHERE pid='$cid' ");
       if($sql){
        @unlink("_product_images/$img.jpg");
       }
    }








endif;