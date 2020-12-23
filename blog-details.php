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
    <section class="banner-section blog-banner top-margin">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">
                        <h4 class="fw-500 color-ff">blog details</h4>
                        <p class="color-ff">Welcome to Rixy Skin Care</p>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">blog details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End banner section==  
    =======================================-->


    <!-- ======================================= 
            ==Start Blog section==  
    =======================================-->
    <section class="blog-section blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <?php $bid = $_GET['blog'];
                    $sqlx=$conn->query("SELECT * FROM blog WHERE bid='$bid'");
                    if($sqlx->num_rows>0){
                        $row=$sqlx->fetch_assoc() ?>
                    <div class="blog-details-wrapper">
                        <img src="_slide_blog/<?php echo $row['img']; ?>" alt="blog-details-img" class="img-fluid" />
                        <h5 class="title color-d5"><?php echo $row['title']; ?></h5>
                        <ul class="tags ptb-20">
                            <li><i class="fa fa-calendar color-72"></i><?php echo formatDate($row['time_created']) ?></li>
                        </ul>
                        <p>
                        <?php echo $row['content']; ?>
                            <!-- As you might have guessed, most designers choose this unit arbitrarily. The problem with this approach is that the resulting baseline grid unit is not directly related to the primary font size, which is the most fundamental design element on the page.
                            <br/><br/> Instead of relying on arbitrary selection, wouldn’t it be nice if there were a way to determine the perfect typography settings based on a given context?
                            <br/><br/> As it turns out, the golden ratio provides us with a guide—a formula—for proper typesetting. Because of this, we can now set our type with absolute certainty in any situation! Better still, we can use this information about typography to make more informed decisions about all the spatial aspects of our designs, such as: -->
                        </p>

                        

                    </div>
                    <!--/blog post wrapper-->

                    <?php  } ?>

                    <!--/comment-form-section-->
                </div>
                <!--/col-->

                <div class="col-lg-4">
                    <aside class="blog-sidebar clearfix">
                        

                        <div class="latest-blog-area single-widget">
                            <h5 class="widget-title fw-500 pos-relative">Latest Blog</h5>
                            <?php 
                            $sql=$conn->query("SELECT * FROM blog WHERE bid !='$bid' ORDER BY id LIMIT 5");
                            if($sql->num_rows>0){
                                while($cat=$sql->fetch_assoc()){?>
                            <!--latest post-1-->
                            <div class="single-latest-post">
                                <a href="blog-details?blog=<?php echo $cat['bid']; ?>"><img src="_slide_blog/<?php echo $cat['img']; ?>" style="width: 100px;" alt="latest-blog"></a>
                                <ul>
                                    <li>
                                        <h6><a href="blog-details?blog=<?php echo $cat['bid']; ?>"><?php echo $cat['title']; ?></a></h6>
                                    </li>
                                    <li><?php echo formatDate($cat['time_created']) ?></li>
                                </ul>
                            </div>
                        <?php } } ?>
                           
                        </div>
                        <!-- /latest blog area-->

                        
                        <!--/instagram gallery-->
                    </aside>
                </div>
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
</body>



</html>
