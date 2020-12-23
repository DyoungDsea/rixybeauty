<?php 
// include 'clean.php';


include 'head.php'; //echo $_SESSION['rixy']; ?>
<body>



 <!-- ======================================= 
        ==Start Header section==  
    =======================================-->
    <?php include 'header.php'; ?>
    <!-- ======================================= 
        ==start Slider section==  
    =======================================-->




    <!-- ======================================= 
            ==Start Blog section==  
    =======================================-->
    <section class="blog-section blog-details mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 bg-infos">
                    <aside class="blog-sidebar clearfix">
                       
                    <?php include 'link.php'; ?>
                       
                        

                    </aside>
                </div>
                <div class="col-lg-10">

                <div class="right mb-3" style="text-align: right;">
                    <a href="#allproduct" title="Add New Product" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">Add New Product</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-stripeds table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price(&#8358;)</th>
                            <th scope="col">Category</th>
                            <th scope="col">Sub Category</th>
                            <th scope="col">---</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql=$conn->query("SELECT * FROM dproducts ORDER BY id DESC");
                            if($sql->num_rows>0){
                                while($row=$sql->fetch_assoc()): 
                                ?>
                            <tr>
                            <th scope="row">
                                <img src="_product_images/<?php echo $row['dimg']; ?>" style="width: 80px;" alt="">
                            </th>
                            <td><?php echo formatDate($row['ddate']); ?></td>
                            <td><?php echo $row['pname']; ?></td>
                            <td><?php echo number_format($row['pprice']); ?></td>
                            <td><?php echo $row['dcategory']; ?></td>
                            <td><?php echo $row['dsub_cat']; ?></td>
                            <td>
                            <td>
                                    <button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>"> <i class="fa fa-edit"></i> Edit</button>
                                    <button id="productRemove" img="<?php echo $row['dimg']; ?>" cid="<?php echo $row['pid']; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Delete</button>
                                </td>
                            </td>
                            </tr>
                            <tr>
                                <?php endwhile; }else{?>
                                    <tr>
                                        <th colspan="8" class="text-danger">No Products added yet</th>
                                        
                                    </tr>
                             <?php   } ?>
                        </tbody>
                    </table>
                </div>
                    
                </div>
                <!--/col-->
                <!--/col-->
            </div>
            <!--/row-->
        </div>
    </section>
    <!-- ======================================= 
            ==End blog section== 
    =======================================-->

<br>
<br>
<br>
<br>
<br>
<br>
    
    
    <!-- ======================================= 
            ==Start footer section==  
    =======================================-->
    <?php include 'footer.php'; ?>
    <!-- ======================================= 
            ==End footer section== 
    =======================================-->


   
    <?php include 'script.php'; ?>

    

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <form action="product" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                   <!-- <label for="pname">Product Name</label> -->
                   <input type="text" name="pname" required class="form-control" placeholder="Product Name">
               </div>

               <div class="single-input beauty-expart clearfix">
                    <select class="wide" id="category" name="category" required>
                    <option value="">Choose Category</option>
                    <?php
                    $sql = $conn->query("SELECT * FROM dcategory ORDER BY dname");
                    if($sql->num_rows>0){
                        while($dop=$sql->fetch_assoc()){?>
                        <option value="<?php echo $dop['dname']; ?>"><?php echo $dop['dname']; ?></option>
                    <?php    }
                    }

                    ?>
                    </select>
                </div>
                <br>

                <div id="subcat">

                </div>

               <div class="form-group">
                   <input type="text" name="price" required class="form-control" placeholder="Product Price">
               </div>

               <div class="form-group">
                   <textarea name="desc" id=""  cols="20" rows="5"  required placeholder="Product Description" class="form-control"></textarea>
               </div>

               <div class="form-group">
                   <input type="file" required name="img" id="" class="form-control-file">
               </div>

           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Submit</button>
        </div>
        </div>
        </form>
    </div>
    </div>

    <?php
        $sqls=$conn->query("SELECT * FROM dproducts ORDER BY id DESC");
        if($sqls->num_rows>0){
            while($row=$sqls->fetch_assoc()): 
            ?>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <form action="product-update" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                   <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
                   <input type="text" name="pname" value="<?php echo $row['pname']; ?>" required class="form-control" placeholder="Product Name">
               </div>

               <div class="single-input beauty-expart clearfix">
                    <select class="wide" id="categoryx" name="category" required>
                    <option value="">Choose Category</option>
                    <?php
                    $sql = $conn->query("SELECT * FROM dcategory ORDER BY dname");
                    if($sql->num_rows>0){
                        while($dop=$sql->fetch_assoc()){?>
                        <option <?php if($dop['dname']==$row['dcategory']) echo 'selected'; ?> value="<?php echo $dop['dname']; ?>"><?php echo $dop['dname']; ?></option>
                    <?php    }
                    }

                    ?>
                    </select>
                </div>
                <br>

                <div id="subcats">
                <div class="single-input beauty-expart clearfix">
                    <select class="wide" id="categoryx" name="sub" required>
                    <option value="">Choose Category</option>
                    <?php
                    $sqlx = $conn->query("SELECT * FROM dsubcategory ORDER BY dsub_cat");
                    if($sqlx->num_rows>0){
                        while($dop=$sqlx->fetch_assoc()){?>
                        <option <?php if($dop['dsub_cat']==$row['dsub_cat']) echo 'selected'; ?> value="<?php echo $dop['dsub_cat']; ?>"><?php echo $dop['dsub_cat']; ?></option>
                    <?php    }
                    }

                    ?>
                    <option value="">None</option>
                    </select>
                </div>
                <br>
                </div>

               <div class="form-group">
                   <input type="text" name="price" value="<?php echo $row['pprice']; ?>" required class="form-control" placeholder="Product Price">
               </div>

               <div class="form-group">
                   <textarea name="desc" id="" cols="20" rows="5" required placeholder="Product Description" class="form-control"> <?php echo $row['pdesc']; ?></textarea>
               </div>

               <div class="form-group">
                   <input type="file"  name="img" id="" class="form-control-file">
                   <input type="hidden" name="dimg" value="<?php echo $row['dimg']; ?>">
               </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="saves" class="btn btn-primary">Submit</button>
        </div>
        </div>
        </form>
    </div>
    </div>

<?php endwhile; } ?>
    

</html>
