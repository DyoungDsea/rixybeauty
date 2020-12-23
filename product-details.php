<?php

include 'head.php'; ?>
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
    <section class="product-gallery with-sidebar product-details-section mt-5">
        <div class="container">

            <div class="row">
            <?php
                $pid = clean($_GET['pid']);
                $sql=$conn->query("SELECT * FROM dproducts WHERE pid='$pid'");
                if($sql->num_rows>0){
                   $row=$sql->fetch_assoc() 
                    ?>
                <div class="col-lg-9 order-lg-2">

                    <div class="product-details-wrapper">
                        <div class="product-preview-area">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pro-item1" role="tabpanel">
                                    <img src="_product_images/<?php echo $row['dimg']; ?>" alt="product-img" class="img-fluid">
                                </div>
                            </div>

                        </div>
                        <!--/product preview area-->

                        <!--product details content-->
                        <div class="product-details-content">
                            <h6 class="procuct-title color-d5 fw-700 text-uppercase pb-15"><?php echo $row['pname']; ?></h6>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                            <h4 class="price fw-700 color-72 pt-20 pb-10">
                            &#8358;<?php echo number_format($row['pprice']); ?>
                            </h4>
                            <p class="details-txt color-51">
                            <?php echo $row['pdesc']; ?>
                            </p>
                            

                            <div class="product-type ptb-20">
                                <table>
                                    <tr class="category">
                                        <td>Category :</td>
                                        <td><?php echo $row['dcategory']; ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Sub Category :</td>
                                        <td><?php if(!empty($row['dsub_cat'])) echo ucwords($row['dsub_cat']); ?></td>
                                    </tr>
                                </table>
                            </div>

                            <!-- <div class="share-icons pt-30">
                                <ul>
                                    <li class="text-uppercase color-d5 mr-10">Share This :</li>
                                    <li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                        <!--/product details content-->

                    </div>
                    <!--/wrapper-->

                    <!-- <div class="product-review-tab">
                        <nav>
                            <div class="nav nav-tabs" role="tablist">
                                <a class="active" data-toggle="tab" href="#review" role="tab" aria-selected="true">Reviews <span>(2)</span></a>
                            </div>
                        </nav>

                        <div class="tab-content">
                            

                            <div class="tab-pane fade show active" id="review" role="tabpanel">
                                <div class="review">
                                    <div class="single-review pos-relative">
                                        
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <ul class="author-name display-inline ptb-5">
                                            <li class="name">james franklin</li>
                                            <li class="date">oct 8 2020 at 2.00 pm</li>
                                        </ul>
                                        <p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dicta excepturi expedita facere voluptas soluta debitis voluptatum necessitatibus, alias</p>
                                    </div>

                                    

                                    <div class="review-form pt-20">
                                        <h6 class="fw-600 color-d5 text-uppercase">leave a review</h6>
                                        <p class="rating-o pb-25">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </p>
                                        <form action="#">
                                            <div class="form-group">
                                                <textarea name="msg"></textarea>
                                            </div>
                                            <div class="form-group clearfix">
                                                <input type="text" name="name" placeholder="Name">
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                            <button type="submit">post review</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> -->
                    <!--/product review tab-->

                    <!---related product-->
                    <h6 class="related-product-title text-uppercase color-d5 fw-500">you may also like this products</h6>
                    <div class="product-gallery-wrapper clearfix" id="product-gallery-v2">
                    <?php
                    $sqlx=$conn->query("SELECT * FROM dproducts WHERE pid !='$pid' ORDER BY RAND() DESC LIMIT 3");
                    if($sqlx->num_rows>0){
                        while($rowx=$sqlx->fetch_assoc()): 
                        ?>
                        <!-- product-1 -->
                        <div class="single-product text-center pos-relative">
                            <div class="product-img pos-relative">
                                <img src="_product_images/<?php echo $rowx['dimg']; ?>" alt="product" class="img-fluid">
                                <div class="product-hover">
                                    <ul>
                                        <li><a href="#" title="Add to Favourite"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="_product_images/<?php echo $rowx['dimg']; ?>" class="color-ff text-capitalize roboto venobox" data-gall="gallery1" title="<?php echo $rowx['pname']; ?>">View Product</a></li>
                                        <li><a href="#" title="Add to Favourite"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-price">
                                <h6 class="color-72 fw-500">&#8358;<?php echo number_format($rowx['pprice']); ?></h6>
                                <div class="product-divider"></div>
                                <a href="product-details?pid=<?php echo $rowx['pid']; ?>" class="roboto fw-500" title="View Details"><?php echo $rowx['pname']; ?></a>
                            </div>
                        </div>
                        <?php endwhile; } ?>
                        

                    </div>
                </div>
                <!--/col-md-9-->
                <?php } ?>

               <div class="col-lg-2"></div>
                <!--/sidebar-->

            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End Product gallery section== 
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


<!-- Mirrored from beautylab.themecon.net/HTML/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 20:52:21 GMT -->
</html>
