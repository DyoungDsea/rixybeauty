<?php
require 'clean.php';


$out ='';
if(isset($_POST['search']) AND $_POST['search']=="Sub"){
    $category = clean($_POST['id']);
    $list=$conn->query("SELECT * from dsubcategory where dcategory='$category' order by dsub_cat");
    if($list->num_rows>=1){
        $out .='
        <div class="single-input beauty-expart clearfix">
        <select class="wide" id="" name="sub" required>
        <option value="">Choose Sub Category</option>';
        while($rows=$list->fetch_assoc()){ 
        $out .='<option value="'.$rows['dsub_cat'].'">'.$rows['dsub_cat'].'</option>';
        }
        $out .= '
        </select>
        </div>
        <br>';
    }

   
}

echo $out;