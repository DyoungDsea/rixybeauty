<?php
require 'clean.php';

if($_SERVER['REQUEST_METHOD']=="POST"){

    $name = clean($_POST['name']);

    if(isset($_POST['log'])){
    $cid = date("ymdhis").rand(10000, 999999);

    $now = gmdate("Y-m-d H:i:s");
    $date = date('Y-m-d H:i:s',strtotime("+1 hour",strtotime($now)));
    $sql = $conn->query("INSERT INTO dcategory SET dname='$name', cid='$cid', ddate='$date' ");
    if($sql){
        $_SESSION['msgs']="Category added successfully";
    }else{
        $_SESSION['msg']="Oops! try again later";
    }

    }
    
    //this for update
    elseif(isset($_POST['update'])){
        $cid = clean($_POST['id']);
        $sql = $conn->query("UPDATE dcategory SET dname='$name' WHERE cid='$cid' ");
        if($sql){
            $_SESSION['msgs']="Category updated successfully";
        }else{
            $_SESSION['msg']="Oops! try again later";
        }
    }
    
    //this for delete
    elseif(isset($_POST['Message']) AND $_POST['Message']=="catDelete"){
        $cid = clean($_POST['id']);
        $conn->query("DELETE FROM dcategory WHERE cid='$cid' ");
    }

    header("Location:categories");
}