<?php
require 'clean.php';

if($_SERVER['REQUEST_METHOD']=="POST"){

    $name = clean($_POST['name']);
    $desc = clean($_POST['desc']);
    $transid = date("ymdhis");
    include 'image_php/class.upload.php';

    if(isset($_POST['log'])){
    $cid = date("ymdhis").rand(10000, 999999);

    $now = gmdate("Y-m-d H:i:s");
    $date = date('Y-m-d H:i:s',strtotime("+1 hour",strtotime($now)));
    $sql = $conn->query("INSERT INTO blog SET title='$name', bid='$cid', content='$desc' ");
    if($sql){
        $_SESSION['msgs']="Blog added successfully";
        insertImages($_FILES['img'], $transid, $cid);
    }else{
        $_SESSION['msg']="Oops! try again later";
    }

    }
    
    //this for update
    elseif(isset($_POST['update'])){
        $cid = clean($_POST['id']);
        $sql = $conn->query("UPDATE blog SET title='$name', content='$desc' WHERE bid='$cid' ");
        if($sql){
            $_SESSION['msgs']="Blog updated successfully";
        }else{
            $_SESSION['msg']="Oops! try again later";
        }
        if(!empty($_FILES['img']['name'])){
            insertImages($_FILES['img'], $transid, $cid);
        }
    }
    
    //this for delete
    elseif(isset($_POST['Message']) AND $_POST['Message']=="catDelete"){
        $cid = clean($_POST['id']);
        $dimg = clean($_POST['dimg']);
        $conn->query("DELETE FROM blog WHERE bid='$cid' ");
        if(!empty($_FILES['img']['name'])){
            insertImages($_FILES['img'], $transid, $cid);
            unlink("_slide_blog/$dimg.jpg");
        }
    }

    header("Location:blog");
}


function insertImages($fileName, $transid, $gerenate_id ){
    GLOBAL $conn;
    @list(, , $imtype, ) = getimagesize($fileName['tmp_name']); 
    if ($imtype == 3 or $imtype == 2 or $imtype == 1) {          
    $picid=$transid.'-1';
    $foo = new Upload($fileName);  
    include("image_php/image_maker-blog.php");        
    $conn->query("UPDATE `blog` SET img='$picid' WHERE bid='$gerenate_id'" );
    }
    
}