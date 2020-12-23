<?php

require("clean.php");
if($_SERVER['REQUEST_METHOD']=="POST"):
if(isset($_POST['save']) ){ 


    $proid = date("ymdhis").rand(10000, 99999999);
    $now = gmdate("Y-m-d H:i:s");
    $date = date('Y-m-d H:i:s',strtotime("+1 hour",strtotime($now)));

    $pname=clean($_POST['pname']); 
    $category=clean($_POST['category']);
    $sub=!empty($_POST['sub']) ? clean($_POST['sub']): NULL;

    $desc=clean($_POST['desc']); 
    $price=clean($_POST['price']);   

    $company = $_SESSION['company'];


    $transid=date('YmHis');

    include 'image_php/class.upload.php';
    //validate image
    if(!empty($_FILES['img']['name'])){
       
        $sku = date("ymds-sh");
        $query = $conn->query("INSERT INTO `dproducts` SET pid='$proid', dsku='$sku', pname='$pname', dcategory='$category', dsub_cat='$sub', pdesc='$desc', pprice='$price', ddate='$date'");
        if($query){
            insertImages($_FILES['img'], $transid, $proid);
            $_SESSION['msgs']="Product added successfully";        
        }else{
            $_SESSION['msgs']="Product insertion failed"; 
        } 
    }
        
          
header("Location: dashboard");      
}else{
    header("Location: home");
 }
endif;
    function insertImages($fileName, $transid, $gerenate_id ){
        GLOBAL $conn;
        @list(, , $imtype, ) = getimagesize($fileName['tmp_name']); 
        if ($imtype == 3 or $imtype == 2 or $imtype == 1) {          
        $picid=$transid.'-1';
        $foo = new Upload($fileName);  
        include("image_php/image_maker_product.php");        
        $conn->query("UPDATE `dproducts` SET dimg='$picid' WHERE pid='$gerenate_id'" );
        }
        
    }



?>

         

         