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
                    <a href="#allproduct" title="Add New Blog" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">New Blog</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-stripeds table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">---</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $sql=$conn->query("SELECT * FROM blog ORDER BY id DESC");
                            if($sql->num_rows>0){
                                while($cat=$sql->fetch_assoc()){?>
                            <tr>
                                <td>
                                    <img src="_slide_blog/<?php echo $cat['img']; ?>" style="width: 100px;" alt="">
                                </td>
                                <td><?php echo $cat['title']; ?></td>
                                <td><?php echo limit_text($cat['content'],10); ?></td>
                                <td>
                                    <button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#exampleModal<?php echo $cat['id']; ?>"> <i class="fa fa-edit"></i> Edit</button>
                                    <button id="blogRemove" cid="<?php echo $cat['bid']; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Delete</button>
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

<br><br>
<br><br>
<br><br>
    
    
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
            <h5 class="modal-title" id="exampleModalLabel"> New Blog</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="blog-process" method="post" enctype="multipart/form-data">
           <div class="form-group">
                <label for="cat">Blog</label>
                <input type="text" id="cat" name="name" required class="form-control" placeholder="Enter Blog">
           </div>
           <div class="form-group">
                <textarea name="desc" class="form-control" id="" cols="30" rows="10"> </textarea>
           </div>

           <div class="form-group">
               <input type="file" name="img" class="form-control-file" id="" required>
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
$sql=$conn->query("SELECT * FROM blog ORDER BY id");
if($sql->num_rows>0){
    while($cat=$sql->fetch_assoc()){?>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal<?php echo $cat['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Blog</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="blog-process" method="post" enctype="multipart/form-data">
           <div class="form-group">
            <label for="cat">Title</label>
            <input type="hidden" name="id" value="<?php echo $cat['bid']; ?>">
                <input type="text" id="cat" name="name" required value="<?php echo $cat['title']; ?>" class="form-control" placeholder="Enter Title">
           </div>

           <div class="form-group">
            <textarea name="desc" class="form-control" id="" cols="30" rows="10"><?php echo $cat['content']; ?> </textarea>
           </div>

           <div class="form-group">
               <input type="file" name="img" class="form-control-file" id="" >
               <input type="hidden" name="dimg" value="<?php echo $cat['img']; ?>" id="" >
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
