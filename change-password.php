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

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <h4 class="mb-5">Change Password</h class="my-2">
                        <form class="mt-3" action="change-password-process" method="post">
                            <div class="form-group">
                                <input type="password" required name="old"  placeholder="Old Password">
                            </div>

                            <div class="form-group">
                                <input type="password" required name="pass"  placeholder="New Password">
                            </div>

                            <div class="form-group">
                                <input type="password" required name="cpass"  placeholder="Confirm New Password">
                            </div>

                                <button class="btn btn-primary btn-block" name="log" type="submit">Submit</button>

                        </form>
                    </div>
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

    
