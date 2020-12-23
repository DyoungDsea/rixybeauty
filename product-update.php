<?php

require("clean.php");
if($_SERVER['REQUEST_METHOD']=="POST"):
if(isset($_POST['saves']) ){ 


    

    $pid=clean($_POST['pid']); 
    $pname=clean($_POST['pname']); 
    $category=clean($_POST['category']);
    $sub=!empty($_POST['sub']) ? clean($_POST['sub']): NULL;

    $desc=clean($_POST['desc']); 
    $price=clean($_POST['price']);   

    // $company = $_SESSION['company'];


    $transid=date('YmHis');

    include 'image_php/class.upload.php';
    //validate image
    if(!empty($_FILES['img']['name'])){
        insertImages($_FILES['img'], $transid, $pid, $_POST['dimg']);
        
    }
      
        $query = $conn->query("UPDATE `dproducts` SET  pname='$pname', dcategory='$category', dsub_cat='$sub', pdesc='$desc', pprice='$price' WHERE pid='$pid'");
        if($query){
            
            $_SESSION['msgs']="Product Updated successfully";        
        }else{
            $_SESSION['msgs']="Oops! try again later"; 
        } 
          
header("Location: dashboard");      
}else{
    header("Location: home");
 }
endif;



    function insertImages($fileName, $transid, $gerenate_id, $imageId){
        GLOBAL $conn;
        @list(, , $imtype, ) = getimagesize($fileName['tmp_name']); 
        if ($imtype == 3 or $imtype == 2 or $imtype == 1) {          
        $picid=$transid.'-1';
        $foo = new Upload($fileName);  
        include("image_php/image_maker_product.php");        
        $sql = $conn->query("UPDATE `dproducts` SET dimg='$picid' WHERE pid='$gerenate_id'" );
        if($sql){
            @unlink("_product_images/$imageId.jpg");
        }
        }
        
    }



?>

         

         