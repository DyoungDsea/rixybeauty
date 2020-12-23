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
        ==Start banner section== 
    =======================================-->
    <section class="banner-section contact-banner top-margin">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">
                        <h4 class="fw-500 color-ff">Contact Us</h4>
                        <p class="color-ff">Welcome to Rixy Skin Care.</p>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End banner section==  
    =======================================-->



    <!-- ======================================= 
        ==Start get in touch section==  
    =======================================-->
    <section class="getin-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="get-in">
                        <h5 class="title color-d5 mb-30 pos-relative fw-500">Get In Touch</h5>

                        <!-- new start -->
                        <form action="contact-process" method="post" class="clearfix">
                            <div class="form-group">
                                <input type="text" name="name" required value="" placeholder="Your Name">
                                <input type="email" name="email" value="" placeholder="Your Email" required>
                                <input type="text" name="subject" value="" placeholder="Subject" required>
                            </div>
                            
                            <textarea name="message" required rows="4" placeholder="Your Message"></textarea>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p class="text-danger mt-3">Anti-spam code:<?php echo date('mis'); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="code" placeholder="Enter Anti-spam Code here">
                                    <input type="hidden" name="hide" value="<?php echo date('mis'); ?>">
                                    <input type="hidden" name="mail" value="<?php echo $rixy['demail']; ?>">
                                </div>
                            </div>
                            <button type="submit" class="send-msg" name="log">send message</button>
                        </form>
                        <!-- new end -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 contact-info-section" style="margin-top: -120px;">
                    <div class="contact-number">
                        <h5 class="title color-d5 mb-30 pos-relative fw-500">Contact Info</h5>
                        <address>
                            <p class="address"><i class="fa fa-home"></i><span>Address:</span> <?php echo $rixy['daddress']; ?> </p>
                            <p class="phone"><i class="fa fa-phone"></i><span>Phone:</span>
                             <?php $explode =  explode(',', $rixy['dphone']); echo $explode[0].'<br>'.$explode[1] ?> 
                            </p>
                            <p class="email"><i class="fa fa-envelope"></i><span>Email:</span> <a href="#"><?php echo $rixy['demail']; ?> </a></p>
                            <p class="web"><i class="fa fa-globe"></i><span>web:</span> <a href="#"><?php echo $rixy['dweb']; ?> </a></p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End get in touch section==  
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


<!-- Mirrored from beautylab.themecon.net/HTML/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 20:53:21 GMT -->
</html>
