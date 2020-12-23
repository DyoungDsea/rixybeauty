<?php include 'head.php'; ?>
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
                <div class="col-lg-3 bg-infos">
                    <aside class="blog-sidebar clearfix">
                       
                    <?php include 'link.php'; ?>

                    </aside>
                </div>
                <div class="col-lg-9">
<hr>
                <div class="right mb-3" style="text-align: right;">
                    <a href="#allproduct" title="Add New Product" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">New Sub Category</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-stripeds table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Category</th>
                            <th scope="col">Sub Category</th>
                            <th scope="col">---</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $sql=$conn->query("SELECT * FROM dsubcategory ORDER BY dcategory");
                            if($sql->num_rows>0){
                                while($cat=$sql->fetch_assoc()){?>
                            <tr>
                                <td><?php echo formatDate($cat['ddate']); ?></td>
                                <td><?php echo $cat['dcategory']; ?></td>
                                <td><?php echo ucwords($cat['dsub_cat']); ?></td>
                                <td>
                                    <button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#exampleModal<?php echo $cat['id']; ?>"> <i class="fa fa-edit"></i> Edit</button>
                                    <button id="subCatRemove" cid="<?php echo $cat['dsid']; ?>" class="btn mb-2 btn-sm btn-danger"> <i class="fa fa-trash"></i> Delete</button>
                                </td>
                            </tr>
                                <?php }} ?>
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
            <h5 class="modal-title" id="exampleModalLabel">Add Sub Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="sub-category-process" method="post">

        <div class="single-input beauty-expart clearfix">
            <select class="wide" name="category" required>
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


           <div class="form-group mt-3">
            <input type="text" id="cat" name="name" required class="form-control" placeholder="Enter Sub Category">
           </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="log" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>
    </div>
    </div>

<?php 
$sqlx=$conn->query("SELECT * FROM dsubcategory ORDER BY dcategory");
if($sqlx->num_rows>0){
    while($cats=$sqlx->fetch_assoc()){?>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal<?php echo $cats['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="sub-category-process" method="post">

        <div class="single-input beauty-expart clearfix">
            <select class="wide" name="category" required>
            <option value="">Choose Category</option>
            <?php
            $sql = $conn->query("SELECT * FROM dcategory ORDER BY dname");
            if($sql->num_rows>0){
                while($dop=$sql->fetch_assoc()){?>
                <option <?php if($dop['dname']==$cats['dcategory']) echo 'selected'; ?> value="<?php echo $dop['dname']; ?>"><?php echo $dop['dname']; ?></option>
            <?php    }
            }

            ?>
            </select>
        </div>

           <div class="form-group">
           <label for="cat">Category</label>
           <input type="hidden" name="id" value="<?php echo $cats['dsid']; ?>">
            <input type="text" id="cat" name="name" required value="<?php echo $cats['dsub_cat']; ?>" class="form-control" placeholder="Enter Category">
           </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </div>
        </form>
        </div>
    </div>
    </div>

    <?php } } ?>



</html>
