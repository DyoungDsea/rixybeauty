<?php include 'head.php'; ?>
<body>



 <!-- ======================================= 
        ==Start Header section==  
    =======================================-->
    <?php include 'header.php'; ?>
  
    <section class="banner-section service-banner top-margin">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">
                        <h4 class="fw-500 color-ff">Login To Admin Page</h4>
                        <p class="color-ff">Welcome Rixy Skin Care.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==Start Treatment information section== 
    =======================================-->
    <section class="treatment-info-section about-section " style="margin-top: -40px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3"></div>
                <div class="col-xl-5 col-lg-5">
                    <div class="info-content bg-dangers" style="padding: 25px; box-shadow:2px 4px 6px grey; border-radius:20px">
                        <div class="my-2 text-center">
                        <h5>Login To Admin Account</h5>
                        </div>
                        <form action="control-process" method="post">
                            <div class="form-group">
                                <input type="text" name="email" required class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" required class="form-control" placeholder="Enter Password">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                    <!--/content-->
                </div>
                <!--/col-->

                
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End Treatment information section== 
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


<!-- Mirrored from beautylab.themecon.net/HTML/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 20:51:38 GMT -->
</html>
