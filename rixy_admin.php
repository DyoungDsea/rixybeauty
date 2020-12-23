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
        ==Start Product gallery section== 
    =======================================-->
    <section class="product-gallery mt-5">
        <div class="container">
            
            <div class="row">
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="top text-center">
                            <h3 class="color-72 fw-500">Admin</h3>
                                <p>Login To Dashboard</p>
                            </div>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Enter Email</label>
                                    <input type="email" required name="email" id="email" placeholder="Enter Email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="pass">Enter Password</label>
                                    <input type="password" required name="password" id="pass" placeholder="Enter Password" class="form-control">
                                </div>

                                <button type="submit"  class="btn btn-block btn-primarys text-white" style="background-color: #d5275a;">Login</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

            
        </div>
    </section>
    <!-- ======================================= 
        ==End Product gallery section== 
    =======================================-->


    <!-- ======================================= 
            ==Start call to action section==  
    =======================================-->
    <section class="cta-section booking-cta-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content">
                        <p>Join our mailing list & get up to <span class="color-d5">25% off</span> on every service!</p>
                        <div class="mail-form">
                            <form class="form-inline" action="#">
                                <input type="email" name="email" placeholder="Your email">
                                <button type="submit" class="join-btn">Join</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
            ==End call to action section== 
    =======================================-->

     
    <!-- ======================================= 
            ==Start footer section==  
    =======================================-->
    <?php include 'footer.php'; ?>
    <!-- ======================================= 
            ==End footer section== 
    =======================================-->


    <?php include 'script.php'; ?>
</body>



</html>
