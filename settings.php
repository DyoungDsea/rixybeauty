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
                <div class="col-lg-2 bg-infos">
                    <aside class="blog-sidebar clearfix">
                       
                    <?php include 'link.php'; ?>
                       
                        

                    </aside>
                </div>
                <div class="col-lg-9">

                <!-- <div class="right mb-3" style="text-align: right;">
                    <a href="#allproduct" title="Add New Product" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">Add New Product</a>
                </div> -->

                <div class="table-responsive">
                    <table class="table table-stripeds table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Web Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Address</th>
                            <th scope="col">---</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 

                            $sql = $conn->query("SELECT * FROM dsettings "); 
                            if($sql->num_rows>0);
                            $row = $sql->fetch_assoc();
                            ?>
                            <tr>
                            <td><?php echo $row['dweb'] ?></td>
                            <td><?php echo $row['demail'] ?></td>
                            <td><?php echo $row['dphone'] ?></td>
                            <td><?php echo $row['daddress'] ?></td>
                            <td>
                            <a href="#allproduct" title="Update Site settings" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Update</a>
                            </td>

                            </tr>
                            <tr>
                            
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
            <h5 class="modal-title" id="exampleModalLabel">Update Settings</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="settings-process" method="post">
                <div class="form-group">
                    <label for="web">Web Name</label>
                    <input type="text" name="web" value="<?php echo $row['dweb'] ?>" id="web" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" value="<?php echo $row['dphone'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $row['demail'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <textarea name="address" id="" class="form-control"><?php echo $row['daddress'] ?></textarea>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="log" class="btn btn-primary">Update</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</html>
