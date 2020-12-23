<?php include 'head.php'; ?>
<body>



 <!-- ======================================= 
        ==Start Header section==  
    =======================================-->
    <?php include 'header.php'; ?>
    <!-- ======================================= 
        ==start Slider section==  
    =======================================-->
    <section class="home1-slider top-margin pos-relative">
        <div class="Modern-Slider" id="home1-slider">
            <!-- item -->
            <div class="item">
                <div class="img-fill">
                    <div class="img-area slider-img1"></div>
                    <div class="info">
                        <div class="align-col-left-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-left">
                                        <h4>Just The Best Place For</h4>
                                        <h3 class="color-d5 fw-700">Beauty & Relaxation</h3>
                                        <h5 class="text-left">Welcome to beauty lab, where you can relax and enjoy life. A little peace in a crazy world goes a long way.</h5>
                                        <a href="#" class="explore-btn fw-700">Explore now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /item -->

            <!-- item-2 -->
            <div class="item">
                <div class="img-fill">
                    <div class="img-area slider-img2"></div>
                    <div class="info">
                        <div class="align-col-left-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-left">
                                        <h4>Just The Best Place For</h4>
                                        <h3 class="color-d5 fw-700">Body Masseging</h3>
                                        <h5 class="text-left">Welcome to beauty lab, where you can relax and enjoy life. A little peace in a crazy world goes a long way.</h5>
                                        <a href="#" class="explore-btn fw-700">Explore now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /item-2 -->

            <!-- item-3 -->
            <div class="item">
                <div class="img-fill">
                    <div class="img-area slider-img3"></div>
                    <div class="info">
                        <div class="align-col-left-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-left">
                                        <h4>Just The Best Place For</h4>
                                        <h3 class="color-d5 fw-700">Hair Treatment</h3>
                                        <h5 class="text-left">Welcome to beauty lab, where you can relax and enjoy life. A little peace in a crazy world goes a long way.</h5>
                                        <a href="#" class="explore-btn fw-700">Explore now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /item-3 -->

            <!-- item-4 -->
            <div class="item">
                <div class="img-fill">
                    <div class="img-area slider-img4"></div>
                    <div class="info">
                        <div class="align-col-left-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-left">
                                        <h4>Just The Best Place For</h4>
                                        <h3 class="color-d5 fw-700">Harbal Treatment</h3>
                                        <h5 class="text-left">Welcome to beauty lab, where you can relax and enjoy life. A little peace in a crazy world goes a long way.</h5>
                                        <a href="#" class="explore-btn fw-700">Explore now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /item-4 -->
        </div>
    </section>
    <!-- ======================================= 
        ==End Slider section==  
    =======================================-->


    <!-- ======================================= 
        ==start welcome section==  
    =======================================-->
    
    <section class="product-gallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="color-72 fw-500">Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>
                    </div>
                </div>
            </div>
            <!--/row-->


            <div class="row product-gallery-wrapper" id="product-gallery-v1">

              
            <?php
            
                $sql=$conn->query("SELECT * FROM dproducts ORDER BY id DESC LIMIT 12");
            
                if($sql->num_rows>0){
                    while($row=$sql->fetch_assoc()): 
                    ?>
                <!-- product-1 -->
                <div class="col-lg-3 col-md-4 mason">
                    <div class="single-product text-center pos-relative">
                        <div class="product-img pos-relative">
                            <img src="_product_images/<?php echo $row['dimg']; ?>" alt="product" class="img-fluid">
                            <div class="product-hover">
                                <ul >
                                    <li><a href="#" title="Add to Favourite"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="_product_images/<?php echo $row['dimg']; ?>" class="color-ff text-capitalize roboto venobox" data-gall="gallery1" title="<?php echo $row['pname']; ?>">View Product</a></li>
                                    <li><a href="#" title="Add to Favourite"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-price">
                            <h6 class="color-72 fw-500">&#8358;<?php echo number_format($row['pprice']); ?></h6>
                            <div class="product-divider"></div>
                            <a href="product-details?pid=<?php echo $row['pid']; ?>" class="roboto fw-500" title="View Details"><?php echo $row['pname']; ?></a>
                        </div>
                    </div>
                </div>
                <!--/col-->
                <?php endwhile; }else{?>
                    <strong class="text-danger">No Product added yet</strong>
                <?php   } ?>
               
            </div>
            <!--/row-->

            <p class="text-center">
                <a href="products" class="btn text-white fw-500" style="background-color: #d5275a;">All Products</a>
            </p>
        </div>
    </section>
    <!-- ======================================= 
        ==End welcome section==  
    =======================================-->


    <!-- ======================================= 
            ==start Seassion booking section== 
    =======================================-->
    <section class="booking-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-4 col-lg-9 offset-lg-3">
                    <div class="section-title text-center">
                        <h3 class="color-72 fw-500">Make a request Now</h3>
                        <p>Deliver Top Class Treatments In A Relaxing Environment.</p>
                    </div>

                    <div class="booking-wrapper mt-45">
                        <form action="#" method="post" class="clearfix">
                            <div class="single-input name">
                                <input type="text" name="name" placeholder="Your Name" required />
                            </div>

                            <div class="single-input phone">
                                <input type="text" name="phone" placeholder="Phone Number" />
                            </div>

                            <div class="single-input email">
                                <input type="email" name="email" placeholder="Email Address" required />
                            </div>

                            <div class="single-input date">
                                <input type="" name="date" id="booking-date" placeholder="DD/MM/YY" required />
                            </div>

                            <div class="single-input beauty-service clearfix">
                                <select class="wide" name="beauty-service" required>
                                    <option selected>Service</option>
                                    <option value="facial">Facials</option>
                                    <option value="nailCare">Nail Care</option>
                                    <option value="eyeCare">Eye Care</option>
                                    <option value="waxing">Waxing</option>
                                    <option value="makeup">Make-Up</option>
                                </select>
                            </div>

                            <div class="single-input beauty-expart clearfix">
                                <select class="wide" name="beauty-expart" required>
                                    <option selected>Beauty Expart</option>
                                    <option value="sokhina">Janny Sokhina</option>
                                    <option value="jorina">Jorina Biswas</option>
                                    <option value="jerin">Jerin Shikdar</option>
                                    <option value="subrina">Subrina Tasnim</option>
                                </select>
                            </div>

                            <div class="single-input msg">
                                <textarea name="msg-area" cols="30" rows="4" placeholder="Your Request here..."></textarea>
                            </div>
                            <button type="submit">Submit Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
            ==End Seassion booking section== 
    =======================================-->

    
    
    <!-- ======================================= 
            ==Start Blog section==  
    =======================================-->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title pb-60 text-center">
                        <h3 class="color-72 fw-500 pb-10">Our Blog</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>
                    </div>
                </div>
            </div>
            <!--/row-->

            <div class="row">
                <!--blog 1-->
                <?php 
                    $sql=$conn->query("SELECT * FROM blog ORDER BY id DESC LIMIT 3");
                    if($sql->num_rows>0){
                        while($cat=$sql->fetch_assoc()){?>
                <div class="col-lg-4">
                    <div class="single-blog" style="box-shadow: 2px 4px 6px #000;">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                                <a href="blog-details?blog=<?php echo $cat['bid']; ?>"><img src="_slide_blog/<?php echo $cat['img']; ?>" alt="blog img" class="img-fluid"></a>
                            </div>
                            <!-- <ul class="brand">
                                <li><i class="fa fa-heart"></i>18</li>
                                <li><i class="fa fa-commenting-o"></i>10</li>
                                <li><i class="fa fa-folder-open"></i>Makeup Tips</li>
                                <li class="gallery"><i class="fa fa-picture-o"></i></li>
                            </ul> -->
                        </div>
                        <div class="blog-content" style="padding: 20px;">
                            <a href="blog-details?blog=<?php echo $cat['bid']; ?>" class="title fw-500 pt-20"><?php echo $cat['title']; ?></a>
                            <p class="ptb-20"><?php echo limit_text($cat['content'],15); ?></p>
                            <a href="blog-details?blog=<?php echo $cat['bid']; ?>" class="readmore" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <?php } } ?>

               
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
</body>


</html>
